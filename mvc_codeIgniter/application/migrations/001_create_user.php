<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_user extends CI_Migration {
        /* crea */
        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 10, //tamaño
                                'unsigned' => TRUE, //no negativos
                                'auto_increment' => TRUE
                        ),
                        'nombre_usuario' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'correo' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,//si o si se llenan estos datos                
                        ),
                        'contraseña' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                            'null' => TRUE,//si o si se llenan estos datos
                        ),
                        'status' => array(
                            'type' => 'TINYINT',
                            'constraint' => '1',
                            'null' => TRUE,//si o si se llenan estos datos
                        ),
                        'rango' => array(
                            'type' => 'TINYINT',
                            'constraint' => '1',
                            'null' => TRUE,//si o si se llenan estos datos
                        ),
                        /* crea todo el sql */
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('usuarios');
        }
        /* drop hace lo contrario lo de arriba */
        public function down()
        {
                $this->dbforge->drop_table('usuarios');
        }
}