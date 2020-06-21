<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	/* Controladores */
	// public function test($id, $hola = 'hola'){
		//echo "hola mundo desde test	";
		/*  url controlador/metodo/argumento(query strings) siemrep en ese orden
		si usamos un ercer parametro podemos usarlo como parte de la funcion*/
		//echo $id;
		//echo $hola;
		/* se puede enviar muchos parametros */
	//} 
	/* vistas */
	public function vistas(){		
		/* forma de cargar un view desde un controlador */
		$this->load->view('vistas');
		/* ademas se puden cargar vista simultaneaas como el header, el footer con vistas multiples */
	
		$this->load->view('footerV');
		/* va en orden jerarquico entonces debemos mantener un orden la pagina */
		/* pasar datos---------- */

	}
	public function vistas2(){		
		/* pasar datos: */
		$data['titulo'] = 'desde las vistas con datos';
		$data['lista'] = array('negro','azul','blanco');
		/* declarando datos */
		$this->load->view('vistas',$data);
		/* aqui enviamos los datos a la vista */
		$this->load->view('footerV');
		
	}
}
