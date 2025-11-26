<?php

    $id_producto = $_GET["id"];
    include "model/conn.php";
    $sql_producto = $conn->query("select * from productos where id = $id_producto");
    $item_producto = $sql_producto->fetch_object();

?>


<!DOCTYPE html>
<html lang="es-VE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/icons/destello.png" type="image/x-icon">
    <title><?= $item_producto->nombre_producto ?></title>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="navbar-nav ms-4 me-auto">
            <a class="navbar-brand" href="index.php"><b>TIENDA</b></a>
            <form class="d-flex" action="GET" type="search">
                <input type="search" class="form-control me-2" name="results" placeholder="Buscar...">
                <button type="submit" class="btn btn-dark"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto me-4">
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Crear producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Iniciar sesion</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<body class="bg-dark">
    <div class="row my-5 align-items-center">
        <div class="col-lg-4 offset-lg-1 col-10 offset-1">
            <img class="img-fluid" src="<?= $item_producto->imagen_producto ?>" alt="Imagen sobre...">
        </div>
        <div class="col-lg-5 offset-lg-1 col-10 offset-1 text-white">
            <h1><?= $item_producto->nombre_producto ?></h1>
            <h6>Publicado por <a href="#">X Empresa</a></h6>
            <h3><b>$<?= $item_producto->precio_producto ?></b></h3>
            <p><?= $item_producto->descripcion_producto ?></p>
            <h6 class="text-success"><i class="fa-solid fa-truck-fast me-2"></i>Envío gratis en las próximas horas.</h6>
            <button type="button" class="btn btn-warning mt-3 p-3">Agregar al carrito<i class="fa-solid fa-cart-shopping ms-2"></i></button>
        </div>
    </div>
</body>

<?php
    include "components/footer.html";
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>

</html>