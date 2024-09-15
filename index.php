<?php
$producto1 = [
    'img' => 'resources/bootstrap/img/card01.jpg',
    'nombre' => 'card title',
    'año'=>'last update 3 mins ago',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
];
$producto2 = [
    'img' => 'resources/bootstrap/img/card02.jpg',
    'nombre' => 'card title',
    'año'=>'last update 3 mins ago',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
];
$producto3 = [
    'img' => 'resources/bootstrap/img/card03.jpg',
   'nombre' => 'card title',
    'año'=>'last update 3 mins ago',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
];
$producto4 = [
    'img' => 'resources/bootstrap/img/card04.jpg',
    'nombre' => 'card title',
    'año'=>'last update 3 mins ago',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
];
$producto5 = [
    'img' => 'resources/bootstrap/img/card05.jpg',
   'nombre' => 'card title',
    'año'=>'last update 3 mins ago',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
];
$producto6 = [
    'img' => 'resources/bootstrap/img/card06.jpg',
   'nombre' => 'card title',
    'año'=>'last update 3 mins ago',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
];
$productos = [$producto1, $producto2, $producto3, $producto4, $producto5, $producto6];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- logo de la marca -->
        <a class="navbar-brand" href="#">
            <img src="resources/bootstrap/img/logo.png" alt="" style="width: 35px;"> Tiendas MAS
        </a>
        <section class="ml-auto">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex">
                    <p class="mr-3 mb-0 d-flex align-items-center">
                        <i class="fab fa-facebook mr-2"></i> Facebook
                    </p>
                    
                    <p class="mb-0 d-flex align-items-center">
                        <i class="fab fa-whatsapp mr-2"></i> WhatsApp
                    </p>
                    </div>
                </div>
            </div>
        </section>
    </nav>



    <!--    <div class="carousel-item">
  <img src="resources/img/slide01.jpg" alt="slide01">
  <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div> -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="resources/bootstrap/img/slide01.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="resources/bootstrap/img/slide02.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="resources/bootstrap/img/slide03.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <section>
        <div class="container">
            <div class="row">
                <?php foreach ($productos as $producto) { ?>
                    <div class="col-md-6 col-sm-12">
                        <div class="row no-gutters border mt-1 m-3" style="height: 180px;">
                            <div class="col-md-4 ">
                                <img src="<?php echo $producto['img'] ?> "class="card-img-top"  style="width: 180px;"  alt="...">
                            </div>
                            <div class="col-md-8 ">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $producto['nombre'] ?> </h5>
                                    <p class="card-text"><?php echo $producto['descripcion'] ?> </p>
                                    <p class="card-text text-secondary"><?php echo $producto['año'] ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>

    <footer style="background-color: #f8f9fa; padding: 20px 0; max-width: 1078px; margin: 0 auto;">
        <div style="text-align: left; font-size: 14px; padding-left: 0;">
            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                <i class="fas fa-map-marker-alt"></i>
                <span style="margin-left: 8px;">Jr. Amazonas 120</span>
            </div>
            <div style="display: flex; align-items: center;">
                <i class="fas fa-phone-alt"></i>
                <span style="margin-left: 8px;">Teléfono: 123456789</span>
            </div>
        </div>
        <div style="margin-top: 20px; font-size: 14px; text-align: center;">
            Todos los Derechos Reservados 2014
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- For icons -->
</body>
</html>



