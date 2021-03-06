<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center ">
            <h1>login</h1>
            <?php //var_dump($menu) ?>
            <!-- devuelve todo el array -->
            </div>
        </div>
    </div>
       <header>
       <?=validation_errors(); ?> <!-- mostrar los errores con la clase de form_validation -->
           <div class="container">
               <div class="row">
                   <div class="col-12">
                        <form action="<?= base_url('login/validate') ?>" method='POST' id="frm_login">
                        <div class="form-group" id="email">
                            <label for="exampleInputEmail1">Correo</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Ingrese su email</small>
                            <!-- ayuda a mostrar los erroes -->
                            <div class="invalid-feedback"> 
                                El correo es vacio
                            </div>
                        </div>
                        <div class="form-group" id="password">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">

                            <div class="invalid-feedback"> 
                                El password es vacio
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                         </form>
                
                   </div>
               </div>
           </div>
       

        </header>

    <!-- <ul> -->
    <?php //foreach($menu as $item): ?>
        <!-- <li> -->
            <!-- <a href="<?= $item['url'] ?>"><?= $item['title'] ?> </a> -->
            <!-- debemos usar el nombre de la variable que usamos en el helper -->
        <!-- </li> -->
        
    <?php //endforeach; ?>
    <!-- </ul> -->
<!-- para ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src=" <?=base_url('assets/js/auth/login.js'); ?>"></script>
</body>
</html>