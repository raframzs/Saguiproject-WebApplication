<?php
    require 'content/includes/init.php';
    Auth::requiredLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Buscador SAGUI</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img class="img-responsive" src="content/images/logo.png" alt="SAGUI" width="100">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="content/stock.php">Stock</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="content/search.php">Importación</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Acerca De</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-warning" href="/logout.php">Salir</a>
          </li> 
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div class="container text-center">
      <h1 class="display-3">¡Somos SAGUI!</h1>
      <p class="lead"><strong>Selecciona en el menu superior</strong> 'Importación' para buscar información relacionada a los manifiestos y los productos mismos o, selecciona 'Stock' para ver las unidades disponibles en nuestro centro de costo</p>
      <small class="text-danger"><strong>Actualizadas tablas de existencias CEDI y LATINO Lunes 7 de Julio</strong> </small>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Acerca de esta página</h2>
          <p class="lead">Este sitio es creado para el personal de SAGUI IMPORT aqui podrás:</p>
          <ul>
            <li>Consultar la información de importación de cualquier referencia de la empresa.</li>
            <li>Consultar y buscar el stock disponible de una producto específico entre CEDI y LATINO</li>
            <li>Otras modalidades como comunicados y eventos estaran disponibles próximamente.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; SAGUI IMPORT SAS 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
