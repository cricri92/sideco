<?php

class Diary_model extends CI_Model
{
	//CONSTRUCTOR DEL MODEL
	function __construct()
	{
		parent::__construct();
	}

	function noExistDiaryNumber($num_acta)
	{
		$query = $this->db->get_where('diary',array('num_acta'=>$num_acta));
		return $query->num_rows() == 0;
	}

	function insertDiary($data)
	{
		$this->db->insert('diary', $data);	
	}

	function noExistDiaryAttachment($request_id)
	{
		$query = $this->db->get_where('diary_attachment', array('request_id'=>$request_id));
		return $query->num_rows() == 0;
	}

	function insertRequest($request_id)
	{
		$this->db->insert('diary_attachment', array('request_id'=>$request_id));
	}
	
	function getDiaryRequest()
	{
		$query = $this->db->get('diary_attachment');
		return $query->result();
	}

	function getRequestsForDiary()
	{
		$this->db->order_by("date", "desc"); 
		$this->db->where('status_id', 6);
		$query = $this->db->get('request');
		return $query->result();
	}

	function deleteRequest($request_id)
	{
		$this->db->delete('diary_attachment', array('request_id'=>$request_id));
	}
	
	function getDiaryType()
	{
		$query = $this->db->get('diary_type');
		return $query->result();
	}

	function diary_activated()
	{
		$query = $this->db->get('diary');
		return $query->row();
	}

	function desactivateCurrentDiary()
	{
		$this->db->where('activated', 1);
		$this->db->update('diary', array('activated'=>0));
	}

	function existDiaryById($diary_id)
	{
		$query = $this->db->get_where('diary', array('id' => $diary_id));
		return $query->row();
	}

	//OBTENGO LA AGENDA ACTUAL
	function getDiaryActive()
	{
		$query = $this->db->get_where('diary', array('activated' => 1 ));
		return $query->row();
	}

	function isNotDuplicatedDiaryNumber($diary_id, $diary_number)
	{
		$query = $this->db->get_where('diary', array('id !=' => $diary_id, 'num_acta' => $diary_number ));
		return $query->num_rows() == 0; 
	}

	function updateDiary($diary_id, $data)
	{
		$this->db->where('id', $diary_id);
		$this->db->update('diary', $data);
	}

	function getDiaryDataById($diary_id)
	{
		$query = $this->db->get_where('diary',array('id' => $diary_id ));
		return $query->row();
	}

	function getDiaryPointsById($diary_id)
	{
		$this->db->from('diary_points');	
		$this->db->join('request', 'request.id = diary_points.request_id');
		$this->db->group_by('request.type_request_id'); 
		$query = $this->db->get();
		return $query->result();
	}

	function getDiaryId()
	{
		$query = $this->db->get_where('diary',array('activated' => 1 ));
		return $query->row()->id;
	}
	
	function addRequestToDiary($diary_id, $request_id)
	{
		$this->db->insert('diary_points', array('diary_id' => $diary_id, 'request_id' => $request_id));
	}

	function getNameDiaryTypeById($diary_type_id)
	{
		$query = $this->db->get_where('diary_type',array('id' => $diary_type_id));
		return $query->row()->name;
	}
}  

?>