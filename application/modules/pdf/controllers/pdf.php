<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf extends MX_Controller{

	//CONSTRUCTOR DE LA CLASE
	public function __construct()
	{
		parent::__construct();
		$this->load->library('mpdf');
	}

	public function newPDFDiary()
	{
		$diary = $this->pdf_model->getDiary();
		$plantilla_acta = $this->load->view('agenda', $data, TRUE);

		$mpdf = new mPDF();
		$mpdf->WriteHTML($plantilla_acta);
		$mpdf->Output('plantilla_acta.pdf','I');
	}
}

?>