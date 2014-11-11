<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Diary extends MX_Controller{

	//CONSTRUCTOR DE LA CLASE
	public function __construct()
	{
		parent::__construct();
		$this->load->model('diary_model');
	}

	public function newDiary()
	{
		if(modules::run('user/isAdministrator'))
		{
			$user_id = modules::run('user/getSessionId');
			$data['userData'] = modules::run('user/getUserData', $user_id);
			$data['title'] = 'Backend - Nueva agenda';
			$data['diary_type'] = $this->getDiaryType();
			$data['diary_activated']	= $this->diary_model->diary_activated();
			$data['contenido_principal'] = $this->load->view('nueva-agenda', $data, true);
			$this->load->view('back/template', $data);
		}
		else
		{
			redirect('backend');
		}
	}

	function noExistDiaryNumber($num_acta)
	{
		return $this->diary_model->noExistDiaryNumber($num_acta);
	}

	//OBTENGO LOS TIPOS DE AGENDA
	function getDiaryType()
	{
		$query = $this->diary_model->getDiaryType();
		$query = objectSQL_to_array($query);
		return $query;
	}	


	//DESCATIVA LA AGENDA ACTUAL
	function desactivateCurrentDiary()
	{
		return $this->diary_model->desactivateCurrentDiary();
	}

	//CREA UNA AGENDA
	public function createDiary()
	{
		if(!empty($_POST))
		{
			$this->form_validation->set_rules('date', 'Fecha', 'required');
			$this->form_validation->set_rules('num_acta','Numero de acta','required|trim|callback_noExistDiaryNumber');
			$this->form_validation->set_rules('diary_type_id','Tipo de Reunion','required');

			$this->form_validation->set_message('required', '%s es requerido.');
			$this->form_validation->set_message('noExistDiaryNumber', '%s existe');

			if($this->form_validation->run($this))
			{
				$data = array(
					'date'		=> $this->input->post('date'),
					'activated'	=> 1,
					'num_acta' 	=> $this->input->post('num_acta'),
					'diary_type_id' => $this->input->post('diary_type_id')
				);

				$this->diary_model->desactivateCurrentDiary();

				$this->diary_model->insertDiary($data);


				redirect('backend');
			}
			else
			{
				$user_id = modules::run('user/getSessionId');
				$data['userData'] = modules::run('user/getUserData', $user_id);
				$data['title'] = 'Backend - Nueva agenda';
				$data['diary_type'] = $this->getDiaryType();
				$data['diary_activated']	= $this->diary_model->diary_activated();
				$data['contenido_principal'] = $this->load->view('nueva-agenda', $data, true);
				$this->load->view('back/template', $data);
			}
		}
		else
		{
			redirect('redirect');
		}
	}


	//VERIFICA QUE EXISTA UNA AGENDA POR ID
	public function existDiaryById($diary_id)
	{
		return $this->diary_model->existDiaryById($diary_id);
	}

	public function getDiaryActived()
	{
		$query = $this->diary_model->getDiaryActive();
		$query = SQL_to_array($query);
		return $query;
	}

	public function updateDiary()
	{
		if(modules::run('user/isAdministrator'))
		{
			$user_id = modules::run('user/getSessionId');
			$data['userData'] = modules::run('user/getUserData', $user_id);
			$data['title'] = 'Backend - Actualizar agenda';
			$data['diary_type'] = $this->getDiaryType();
			$data['diary_activated'] = $this->getDiaryActived();
			$data['diary'] = $this->getDiaryActived();
			$data['contenido_principal'] = $this->load->view('actualizar-agenda', $data, true);
			$this->load->view('back/template', $data);
		}
		else
		{
			redirect('backend');
		}
	}

	public function getDiaryRequest()
	{
		$query = $this->diary_model->getDiaryRequest();
		$query = objectSQL_to_array($query);
		foreach ($query as $key => $value) 
		{
			$query[$key]['isChecked'] = $this->noExistDiaryAttachment($query[$key]['id']);
		}
		return $query;
	}


	public function addRequests()
	{
		if(modules::run('user/isAdministrator'))
		{
			$user_id = modules::run('user/getSessionId');
			$data['userData'] = modules::run('user/getUserData', $user_id);
			$data['title'] = 'Backend - Agregar solicitudes';
			$data['requests'] = modules::run('request/getRequestsForDiary');
			$data['diaryRequests'] = $this->getDiaryRequest();
			foreach($data['requests'] as $key => $value)
			{
				foreach ($data['diaryRequests'] as $k => $v) 
				{
					if($data['requests'][$key]['id'] == $data['diaryRequests'][$k]['request_id'])
					{
						$data['requests'][$key]['isChecked'] = 1;
					}
				}
			}
			$data['contenido_principal'] = $this->load->view('agregar-solicitudes', $data, true);
			$this->load->view('back/template', $data);
		}
		else
		{
			redirect('backend');
		}
	}

	public function noExistDiaryAttachment($request_id)
	{
		return $this->diary_model->noExistDiaryAttachment($request_id);
	}

	public function addRequest()
	{
		if(!empty($_POST))
		{
			if(isset($_POST['agregar']) && !empty($_POST['agregar']))
			{
				foreach($_POST['agregar'] as $key => $value)
				{
					$request_id = $_POST['agregar'][$key];
					if($this->noExistDiaryAttachment($request_id))
					{
						$this->diary_model->insertRequest($request_id);
					}
				}
			}
			else if(isset($_POST['eliminar']) && !empty($_POST['eliminar']))
			{
				foreach($_POST['eliminar'] as $key => $value)
				{
					$request_id = $_POST['eliminar'][$key];
					if(!$this->noExistDiaryAttachment($request_id))
					{
						$this->diary_model->deleteRequest($request_id);
					}
				}
			}
		}
			redirect('backend');
	}

	function isNotDuplicatedDiaryNumber($diary_number)
	{
		return $this->diary_model->isNotDuplicatedDiaryNumber($diary_number);
	}

	public function diaryUpdate()
	{
		if(!empty($_POST))
		{
			$this->form_validation->set_rules('date', 'Fecha', 'required');
			$this->form_validation->set_rules('num_acta','Numero de acta','required|trim|callback_isNotDuplicatedDiaryNumber');
			$this->form_validation->set_rules('diary_type_id','Tipo de Reunion','required');

			$this->form_validation->set_message('required', '%s es requerido.');
			$this->form_validation->set_message('noExistDiaryNumber', '%s existe');

			if($this->form_validation->run($this))
			{
				$data = array(
					'date'		=> $this->input->post('date'),
					'num_acta' 	=> $this->input->post('num_acta'),
					'diary_type_id' => $this->input->post('diary_type_id')
				);

				$diary_id = $this->input->post('diary_id');

				$this->diary_model->updateDiary($diary_id, $data);


				redirect('backend');
			}
			else
			{
				$user_id = modules::run('user/getSessionId');
				$data['userData'] = modules::run('user/getUserData', $user_id);
				$data['title'] = 'Backend - Nueva agenda';
				$data['diary_type'] = $this->getDiaryType();
				$data['diary_activated']	= $this->diary_model->diary_activated();
				$data['contenido_principal'] = $this->load->view('nueva-agenda', $data, true);
				$this->load->view('back/template', $data);
			}
		}
		else
		{
			redirect('backend');
		}
	}
}