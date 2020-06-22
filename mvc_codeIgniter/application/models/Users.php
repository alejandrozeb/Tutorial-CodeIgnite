<!-- modelos para registrar usuarios -->
<?php
class Users extends CI_Model{
    function __construct(){
        $this->load->database();
    }

    public function create($datos){
        /* para insertar udaremos builder de codeIgniter */
        if(!$this->db->insert('Usuarios', $datos)){
            return false;
        }
        return true;
        
    }
} 