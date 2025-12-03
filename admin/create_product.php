<?php
    
?>

<!DOCTYPE html>
<html lang="es-VE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/icons/destello.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <title>Crear producto</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="navbar-nav ms-4 me-auto">
            <a class="navbar-brand" href="#"><b>TIENDA</b></a>
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
                    <a class="nav-link" href="admin/create_product.php">Crear producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Iniciar sesion</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<body class="bg-dark">

    <?php
        include "../model/conn.php";
        include "../controllers/create_product_controller.php";
    ?>


    <form method="POST" class="container-fluid mt-5" enctype="multipart/form-data">
        <div class="row text-white">
            <div class="col-lg-4 offset-lg-1">
                <div class="mb-3">
                    <label for="nombre_prod" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control bg-dark text-white" name="nombre_prod" required>
                </div>
                <div class="mb-3">
                    <label for="precio_prod" class="form-label">Precio del producto</label>
                    <input type="number" class="form-control bg-dark text-white" name="precio_prod" required>
                </div>
                <div>
                    <label for="imagen_prod" class="form-label">Imagen del producto</label>
                    <input type="file" accept="image" class="form-control bg-dark text-white" name="imagen_prod" required>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div>
                    <label for="desc_prod" class="form-label">Descripcion</label>
                    <textarea name="desc_prod" class="form-control bg-dark text-white" maxlength="1000" rows="8" required></textarea>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" name="btn_nuevoprod" value="ok" class="btn btn-primary">Crear producto</button>
        </div>
    </form>
</body>
<!-- todo: agregar footer -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>

</html>