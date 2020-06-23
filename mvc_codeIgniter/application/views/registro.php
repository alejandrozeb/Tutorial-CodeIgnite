<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>registro</h1>
    <ul>
    <?php foreach($menu as $item): ?>
        <li>
            <a href="<?= $item['url'] ?>"><?= $item['title'] ?> </a>
            <!-- debemos usar el nombre de la variable que usamos en el helper -->
        </li>
        
    <?php endforeach; ?>
    </ul>
    <?php echo validation_errors(); ?> 
    <?php 
        echo form_open('registro/create',array('method' => 'POST'));
        /* podemos pasarle los datos donde iran(modal), ademas agregamos el metodo de envio */
        echo form_label('Nombre de usuario:');
        echo form_input('username');
        echo "<br>";
        echo "<br>";
        echo form_label('Correo Electronico: ');
        echo form_input(array('type' => 'email', 'name' => 'email'));
        /* podemos especificar los datos d nuestras etiquetas */
        echo "<br>";
        echo "<br>";
        echo form_label('Contraseña: ');
        echo form_password('password');

        echo "<br>";
        echo "<br>";
        echo form_label('Confirmación de contraseña: ');
        echo form_password('password_confirm');

        echo form_submit('submit','Enviar Datos');
        
        echo form_close();
    ?>
    <!-- crea el form en el documento -->
    <?= isset($msg) ? $msg : '' ?>
    <!-- verifica el registro de las migraciones -->
</body>
</html>