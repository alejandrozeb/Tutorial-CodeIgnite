<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>login</h1>
    <?php //var_dump($menu) ?>
    <!-- devuelve todo el array -->

    <ul>
    <?php foreach($menu as $item): ?>
        <li>
            <a href="<?= $item['url'] ?>"><?= $item['title'] ?> </a>
            <!-- debemos usar el nombre de la variable que usamos en el helper -->
        </li>
        
    <?php endforeach; ?>
    </ul>
</body>
</html>