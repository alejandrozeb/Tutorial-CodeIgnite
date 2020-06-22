<!-- Archivo registro para helpers -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    /* CodeIgniter Requiere que los archivos tengan los mismos nombres */
	public function __construct(){
        /* doble barra __ */
        parent::__construct();
        $this->load->helper(array('getmenu'));
        /* tambien podemos cargar librerias y helpers */
        /* cargar base de datos */
        //$this->load->database();
        /* verificar las especificaciones */
        $a=$this->load->model('Users');
    }
    /* ejemplo para registro */
	public function index()
	{
        $data['menu']=main_menu();
        $this->load->view('registro',$data);
        $query= $this ->db->get('usuarios');
       // var_dump($query->result());
        /* extrae datos */
       
        /* cargamos el modal */
        
    }
    /* formularios */
    /* recoger datos */
    /* crear usuario */
    public function create(){
        /* forma de recibir datos para post */
        /* la libreria input ya viene cargada por defecto*/

        $username = $this->input->post('username');
        /* recogiendo los datos */
        $email= $this->input->post('email');
        $password = $this->input->post('password');
        $password_c = $this->input->post('password_confirm');
       // var_dump($username . $email . $password . $password_c);
        /* recibimos los datos y guardamos en variables */
        $datos=array(
            'nombre_usuario' => $username,
            'correo' => $email,
            'contraseña' => $password,
         );
        /* cargamos el menu */
        $data['menu'] = main_menu();
        
        if(!$this->Users->create($datos)){
            $data['msg']= 'ocurrio un error';
            $this->load->view('registro',$data);
        }

        $data['msg']= 'Registrado correctamente: ';
            $this->load->view('registro',$data);
        
        

    }
}
