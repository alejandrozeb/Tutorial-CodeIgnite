<!-- controlador para helpers, usaremos las vistas de login y registro de la carpeta views ademas de dos controladores Login.php (este) y registro.php -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    /* CodeIgniter Requiere que los archivos tengan los mismos nombres */
    
    
    /* se deben definir metodos constructores para la carga */
    public function __construct(){
        /* doble barra __ */
        parent::__construct();
        /* se debe llamar a la clase padre */

        /* cargando helpers */
        $this->load->helper(array('getmenu','url'));
        /* al momento de llamarlo no es necesario usar el subfijo ( _helper ) */
        /* genera conflictos con uppercase se recomienda no usar */
    }

    /* ya cargados podemos pasarselas a la vista */ 

	public function index()
	{
        $data['menu']=main_menu();
        /* menu solo es una variable que queramos, main_menu es la clase */
        /* para traerlos debemos especifica el nombre */
		$this->load->view('login',$data);
	}
}

