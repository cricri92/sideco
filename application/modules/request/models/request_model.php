<?php

class Request_model extends CI_Model
{
	//CONSTRUCTOR DEL MODEL
	function __construct()
	{
		parent::__construct();
	}

	//DEVUELVE TODOS LOS ESTATUS
	function getStatus()
	{
		$query = $this->db->get('status');
		return $query->result();
	}

	//VERIFICA QUE UNA CEDULA NO EXISTA
	function existCedula($cedula)
	{
		$query = $this->db->get_where('applicant', array('cedula'=>$cedula));
		return $query->num_rows() != 0;
	}	

	function existNombre($nombre)
	{
		$query = $this->db->get_where('applicant',array('name'=>$nombre));
		return $query->num_rows() != 0;
	}

	//CREA UNA NUEVA SOLICITUD
	function createRequest($data)
	{
		$this->db->insert('request', $data);
	}

	//OBTENGO TODAS LAS REQUEST CON ESTATUS RECIBIDAS
	function getAllReceivedRequest()
	{
		$this->db->order_by("date", "desc"); 
		$this->db->where('status_id', 5);
		$query = $this->db->get('request');
		return $query->result();
	}

	//OBTENGO EL NOMBRE DE UN STATUS POR SU ID
	function getStatusNameById($status_id)
	{
		$query = $this->db->get_where('status',array('id'=>$status_id));
		return $query->row()->name;
	}

	//OBTIENE TODOS LAS SOLICITUDES QUE NO ESTAN RECIBIDAS
	function getAllNoReceivedRequest()
	{
		$this->db->order_by("date", "desc"); 
		$this->db->where('status_id !=', 5);
		$query = $this->db->get('request');
		return $query->result();
	}

	function getRequest($request_id)
	{
		$query = $this->db->get_where('request',array('id'=>$request_id));
		return $query->row();
	}


	//OBTENGO LAS SOLICITUDES POR STATUS_ID
	function getRequestByStatusId($status_id)
	{
		$this->db->order_by("date", "desc"); 
		$this->db->where('status_id', $status_id);
		$query = $this->db->get('request');
		return $query->result();
	}

	function newAttachment($data)
	{
		$this->db->insert('request_attachment', $data);
	}

	function getRequestIdByData($data)
	{
		$query = $this->db->get_where('request', $data);
		return $query->row();
	}

	//OBTIENE TODOS LAS SOLICITUDES QUE NO ESTAN RECIBIDAS
	function getRequestsForDiary()
	{
		$this->db->order_by("date", "desc"); 
		$this->db->where('status_id', 6);
		$query = $this->db->get('request');
		return $query->result();
	}

	function noExistDiaryAttachment($request_id)
	{
		$query = $this->db->get_where('diary_attachment', array('request_id'=>$request_id));
		return $query->num_rows() == 0;
	}
	function getLastTenRequests()
	{
		$this->db->order_by("date", "desc");
		$this->db->where('status_id', 5);
		$query = $this->db->get('request',10);
		return $query->result();
	}
	
	function getAllRequests()
	{
		$this->db->order_by("date", "desc"); 
		$query = $this->db->get('request');
		return $query->result();
	}

	function getAttachmentByRequestId($request_id)
	{
		$query = $this->db->get_where('request_attachment', array('request_id'=>$request_id));
		return $query->result();
	}

	//DADO UN ELACE LO BORRO
	function getRequestBySlug($slug)
	{
		$this->db->delete('request', array('slug'=>$slug));
	}

	function existRequestBySlug($slug)
	{
		$query = $this->db->get_where('request', array('slug'=>$slug));
		return $query->num_rows() != 0;
	}

	function deleteRequest($request_id)
	{
		$this->db->delete('request', array('id'=>$request_id));
	}

	function existRequestById($request_id)
	{
		$query = $this->db->get_where('request', array('id'=>$request_id));
		return $query->num_rows() != 0;
	}

	function getRequestById($request_id)
	{
		
		$query = $this->db->get_where('request', array('id'=>$request_id));
		return $query->row();
	}

	function updateRequest($request_id, $data)
	{
		$this->db->where('id', $request_id);
		$this->db->update('request', $data);
	}

	//OBTENGO TODOS LOS TIPOS DE SOLICITUD
	function getAllTypeRequests()
	{
		$query = $this->db->get('type_request');
		return $query->result();
	}

	function getAllRequestsByTypeRequestId($type_request_id)
	{
		$query = $this->db->get_where('request', array('type_request_id'=>$type_request_id, 'status_id'=>6));
		return $query->result();
	}
	
}  

?>