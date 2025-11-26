<!DOCTYPE html>
<html lang="es-VE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/icons/destello.png" type="image/x-icon">
    <title>Tienda de Electrónica</title>
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
    <section id="intro">
        <div class="container-fluid d-flex text-white text-center align-items-center justify-content-center" 
        style="background-image: url(assets/images/pexels_fondo.JPG); height: 50vh; background-size: cover; background-position: center;">
            <div>
                <h1>Tienda de Electrónica</h1>
                <p>Aquí podrás comprar todos los suplementos y artículos de electrónica de la más alta calidad.</p>
            </div>
        </div>
    </section>
    <section id="productos">
        <div class="row mt-5">
            <div class="col-8 offset-2 text-white">
                <h3>Productos populares</h3>
                <div style="grid-template-columns: 1fr 1fr 1fr 1fr;" class="d-grid gap-3 my-4">

                    <div class="card" style="width: 18rem;">
                        <img src="https://webapi3.adata.com/storage/product/c20_feature_image_1200x695_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">$9.99usd</h5>
                            <p class="card-text">Power Bank ADATA de 10000mAh</p>
                            <a href="#" class="btn btn-primary">Ver producto</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
</body>

<footer class="bg-white pb-4">
    <hr>
    <div class="container-fluid">
        <div class="row text-md-left">
            <div class="col-12 col-md-4">
                <h5><b>Acerca de la pagina</b></h5>
                <p>Velit velit do minim officia velit labore velit adipisicing occaecat.</p>
            </div>
            <div class="col-12 col-md-4">
                <h5>Redes sociales</h5>
                <a href="#" class="me-2"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="me-2"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="me-2"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#" class="me-2"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-md-4">
                <h5>Contactanos</h5>
                <a href="mailto:tienda@tienda.com">tienda@tienda.com</a>
                <br>
                <a href="tel:+584121234567">+58 412 123-4567</a>
                <p>Nueva Esparta, Venezuela</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>
</html>