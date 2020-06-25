<?php
class Auth extends CI_Model{
    function __construct(){
        $this->load->database();
    }
    public function login($usuario, $password){
        /* query builder */
       $data =  $this->db->get_where('Usuarios',array('correo' => $usuario,'contraseña' => $password),1);//limite de datos solo envia uno

       if(!$data->result()){
            return false;
       }
     //  return $data->result();
       /* result devuelve los datos */
       return $data->result();
    }
}
