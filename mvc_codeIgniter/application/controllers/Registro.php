<!-- Archivo registro para helpers -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    /* CodeIgniter Requiere que los archivos tengan los mismos nombres */
	public function __construct(){
        /* doble barra __ */
        parent::__construct();
        $this->load->helper(array('getmenu','url'));
    }
    /* ejemplo para registro */
	public function index()
	{
        $data['menu']=main_menu();
		$this->load->view('registro',$data);
	}
}
