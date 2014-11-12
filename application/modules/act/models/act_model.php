<?php

class Act_model extends CI_Model
{
	//CONSTRUCTOR DEL MODEL
	function __construct()
	{
		parent::__construct();
	}

	//OBTENGO TODOS LOS TIPOS DE CONSEJEROS
	function getCounselorTypes()
	{
		$query = $this->db->get('counselor_type');
		return $query->result();
	}

	function createAct($act)
	{
		$this->db->insert('act', $act);
	}

	function updateDiary($diary_id, $diary)
	{
		$this->db->where('id',$diary_id);
		$this->db->update('diary', $diary);
	}

	function getActIdByDiaryId($diary_id)
	{
		$query = $this->db->get_where('act', array('diary_id'=>$diary_id));
		return $query->row()->id;
	}
	
	function createCounselor($data)
	{
		$this->db->insert('counselor', $data);
	}

	function noExistCounselorInAct($act_id, $name)
	{
		$query = $this->db->get_where('counselor', array('act_id' => $act_id, 'name' => $name));
		return $query->num_rows() == 0;
	}

	function desactivateActualAct()
	{
		$this->db->where('activated', 1);
		$this->db->update('act', array('activated' => 0));
	}

	function getActualAct()
	{
		$query = $this->db->get_where('act', array('activated' => 1));
		return $query->row();
	}

	function getCounselorsByActId($act_id)
	{
		$query = $this->db->get_where('counselor', array('act_id' => $act_id));
		return $query->result();
	}
}  

?>