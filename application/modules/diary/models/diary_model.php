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
}  

?>