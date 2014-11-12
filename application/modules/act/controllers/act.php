<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Act extends MX_Controller{

	//CONSTRUCTOR DE LA CLASE
	public function __construct()
	{
		parent::__construct();
		$this->load->model('act_model');
	}

	//OBTENGO TODOS LOS TIPOS DE CONSEJERO
	function getCounselorTypes()
	{
		$query = $this->act_model->getCounselorTypes();
		$query = objectSQL_to_array($query);
		return $query;
	}

	public function generateAct()
	{
		if(modules::run('user/isAdministrator'))
		{
			$user_id = modules::run('user/getSessionId');
			$data['userData'] = modules::run('user/getUserData', $user_id);
			$data['title'] = 'Backend - Generar Acta';
			$data['counselorTypes'] = $this->getCounselorTypes();
			//die_pre($data);
			$data['contenido_principal'] = $this->load->view('generar-acta', $data, true);
			$this->load->view('back/template', $data);

		}
		else
		{
			redirect('backend');
		}
	}

	function getActIdByDiaryId($diary_id)
	{
		return $this->act_model->getActIdByDiaryId($diary_id);
	}

	function noExistCounselorInAct($act_id, $name)
	{
		return $this->act_model->noExistCounselorInAct($act_id, $name);
	}

	//DESACTIVA LA AGENDA ACTUAL
	function desactivateActualAct()
	{
		$this->act_model->desactivateActualAct();
	}

	public function createAct()
	{
		if (!empty($_POST))
		{
			$this->form_validation->set_rules('time','Hora','required');
			$this->form_validation->set_rules('consideration','Consideración','required');
			$this->form_validation->set_rules('comment','Comentario','required');
			$this->form_validation->set_rules('consejeros','Consejeros','required');
			$this->form_validation->set_rules('counselor_type_id','Tipo de consejero', 'required');

			$this->form_validation->set_message('required', '%s es requerido.');

			if($this->form_validation->run($this))
			{
				$act = array(
					'time' => $this->input->post('time'),
					'diary_id'	=> modules::run('diary/getDiaryId'),
					'activated' => 1
				);

				//CREO EL ACTA
				$this->act_model->createAct($act);

				$diary = array(
					'consideration' => $this->input->post('consideration'),
					'comment' => $this->input->post('comment'),
					
 				);

				//ACTUALIZO LA AGENDA
				$this->act_model->updateDiary($act['diary_id'], $diary);

				$consejeros = $this->input->post('consejeros');
				$counselor_type_id = $this->input->post('counselor_type_id');

				$act_id = $this->getActIdByDiaryId($act['diary_id']);

				foreach ($consejeros as $key => $value) 
				{
					$data = array(
						'act_id' => $act_id,
						'name' => $value,
						'counselor_type_id' => $counselor_type_id[$key],
						
					);
					if($this->noExistCounselorInAct($data['diary_id'], $data['name']))
					{
						$this->act_model->createCounselor($data);
					}
				}

				$this->desactivateActualAct();

				redirect('backend');

			}
			else
			{
				$user_id = modules::run('user/getSessionId');
				$data['userData'] = modules::run('user/getUserData', $user_id);
				$data['title'] = 'Backend - Generar Acta';
				$data['counselorTypes'] = $this->getCounselorTypes();
				//die_pre($data);
				$data['contenido_principal'] = $this->load->view('generar-acta', $data, true);
				$this->load->view('back/template', $data);
			}

		}
	}

	//OBTENER ACTA ACTUAL
	public function getActualAct()
	{
		$query = $this->act_model->getActualAct();
		$query = SQL_to_array($query);
		return $query;
	}

	public function getCounselorsByActId($act_id)
	{
		$query = $this->act_model->getCounselorsByActId($act_id);
		$query = objectSQL_to_array($query);
		foreach($query as $key => $value)
		{
			$query[$key]['counselorType'] = modules::run('counselor_type/getCounselorTypeNameById', $query[$key]['counselor_type_id']);
		}

		return $query;
	}

	public function getNameDiaryTypeById($diary_type_id)
	{
		return $this->diary_model->getNameDiaryTypeById($diary_type_id);
	}

	public function getDiaryActived()
	{
		$query = $this->diary_model->getDiaryActive();
		$query = SQL_to_array($query);
		$query['diary_type'] = $this->diary_model->getNameDiaryTypeById($query['diary_type_id']);
		$query['type_requests'] = modules::run('request/getRequestByTypeRequest');  
		$query['points'] = modules::run('request/getRequestByTypeRequest');
		foreach ($query['points'] as $key => $value) 
		{
			foreach($query['points'][$key]['requests'] as $k => $v)
			{
				$query['points'][$key]['requests'][$k]['type_request'] = modules::run('type_request/getNameByTypeRequestId', $query['points'][$key]['type_request_id']);
				$query['points'][$key]['requests'][$k]['cedula'] = modules::run('applicant/getCedulaApplicantById', $query['points'][$key]['requests'][$k]['applicant_id']);
				$query['points'][$key]['requests'][$k]['status'] =  modules::run('request/getStatusNameById',$query['points'][$key]['requests'][$k]['status_id']);
				$query['points'][$key]['requests'][$k]['name'] = modules::run('applicant/getNombreApplicantById', $query['points'][$key]['requests'][$k]['applicant_id']);
			}
		}
		return $query; 
	}

	public function showAct()
	{
		if(modules::run('user/isAdministrator'))
		{
			$data['act'] = $this->getActualAct();
			$data['diary'] = modules::run('diary/getDiaryActive');
			$data['counselors'] = $this->getCounselorsByActId($data['act']['id']);
			$agenda = $this->load->view('acta-pdf', $data, TRUE);
			$mpdf = new mPDF();
			$mpdf->WriteHTML($agenda);
			$mpdf->Output('acta.pdf','I');
		}
		else
		{
			redirect('backend');
		}
	}
}