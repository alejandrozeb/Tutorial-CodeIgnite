
<?php
/* controlador para helpers, usaremos las vistas de login y registro de la carpeta views ademas de dos controladores Login.php este y registro.php */ 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    /* CodeIgniter Requiere que los archivos tengan los mismos nombres */
    
    
    /* se deben definir metodos constructores para la carga */
    public function __construct(){
        /* doble barra __ */
        parent::__construct();
        /* se debe llamar a la clase padre */

        /* cargando helpers */
      //  $this->load->helper(array('getmenu','url'));
        /* al momento de llamarlo no es necesario usar el subfijo ( _helper ) */
        /* genera conflictos con uppercase se recomienda no usar */
        $this->load->library('form_validation');
        $this->load->helper(array('auth/login_rules'));
    }

    /* ya cargados podemos pasarselas a la vista */ 

	public function index()
	{
        //$data['menu']=main_menu(); ya no usamos 
        /* menu solo es una variable que queramos, main_menu es la clase */
        /* para traerlos debemos especifica el nombre */
        //$this->load->view('login',$data);
        $this->load->view('login');
        
    }
    
    public function validate(){
        $this->form_validation->set_error_delimiters('','');
        $rules = getLoginRules();
        $this->form_validation->set_rules($rules);
        if($this->form_validation->run() === FALSE){
            $erros = array(
                'email' => form_error('email'), //trae el error del input de las vistas 
                'password' => form_error('password')
            );
            echo json_encode($erros);
        }else{
            
        }
    }
}

