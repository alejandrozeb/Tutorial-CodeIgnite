<!-- Es muy imprtante que lleve el subfijo(al final) _helper para que pueda reconocer COdeigniter -->
<?php

function main_menu(){
    /* devolveremos un menu para la pagina */
    return array(
        /* aqui devolveremos el login */
        array(
            'title' => 'Login',
            'url'   => base_url(),
            /* codeigniter ya viene con un helper para url, devuelve el localho */  
        ),
        /* aqui un registro */
        array(
            'title' => 'Registro',
            'url'   => base_url('index.php/registro'),
            /* tenemos que especificar por que por dfault estara el login */
        ),
    );

}
/* se pueden crear muchas funciones */
/* para cambiar la url por default debemos ir a la carpeta config al archivo routes.php y cambiar endefault controller  */