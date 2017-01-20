<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<meta name="author" content="Etraining"/>
		<meta name="description" content="Geo Proyecciones main web page"/>
		<title>Geo Proyecciones</title>   
		<script src="https://static.hsstatic.net/jquery-libs/static-1.1/jquery/jquery-1.7.1.js"></script>
		<link rel="stylesheet" href="css/materialize.min.css"/>
		<link rel="stylesheet" href="css/geostyles.css"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
		<script src="js/materialize.min.js"></script>
	</head>
	<body>
		<div class="navbar-fixed">
			<nav>
				<div class="nav-wrapper">
					<a href="index.php" class="brand-logo"><img src="images/logo.png" alt="Geo Proyecciones" style="width:240px;height:64px;"></a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons cyan-text text-darken-4">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="index.php"><i class="material-icons grey-text text-darken-4">new_releases</i><span class="grey-text text-darken-4">Inicio</span></a></li>
						<li><a href="products.php"><i class="material-icons grey-text text-darken-4">shopping_cart</i><span class="grey-text text-darken-4">Productos</span></a></li>
						<li><a href="news.php"><i class="material-icons grey-text text-darken-4">forum</i><span class="grey-text text-darken-4">Noticias</span></a></li>
						<li><a href="clients.php"><i class="material-icons grey-text text-darken-4">assignment_ind</i><span class="grey-text text-darken-4">Clientes</span></a></li>
						<li><a href="contact.php"><i class="material-icons grey-text text-darken-4">contacts</i><span class="grey-text text-darken-4">Contacto</span></a></li>
						<li><a href="about_us.php"><i class="material-icons grey-text text-darken-4">business</i><span class="grey-text text-darken-4">Sobre Nosotros</span></a></li>
						<li><a href="login.php"><i class="material-icons grey-text text-darken-4">perm_identity</i><span class="grey-text text-darken-4">Iniciar Sesion</span></a></li>
					</ul>				
				</div>
			</nav>
		</div>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="index.php"><i class="material-icons grey-text text-darken-4">new_releases</i><span class="grey-text text-darken-4">Inicio</span></a></li>
			<li><a href="products.php"><i class="material-icons grey-text text-darken-4">shopping_cart</i><span class="grey-text text-darken-4">Productos</span></a></li>
			<li><a href="news.php"><i class="material-icons grey-text text-darken-4">forum</i><span class="grey-text text-darken-4">Noticias</span></a></li>
			<li><a href="clients.php"><i class="material-icons grey-text text-darken-4">assignment_ind</i><span class="grey-text text-darken-4">Clientes</span></a></li>
			<li><a href="contact.php"><i class="material-icons grey-text text-darken-4">contacts</i><span class="grey-text text-darken-4">Contacto</span></a></li>
			<li><a href="about_us.php"><i class="material-icons grey-text text-darken-4">business</i><span class="grey-text text-darken-4">Sobre Nosotros</span></a></li>
			<li><a href="login.php"><i class="material-icons grey-text text-darken-4">perm_identity</i><span class="grey-text text-darken-4">Iniciar Sesion</span></a></li>
		</ul>
		
		<div class="carousel carousel-slider">
			<a class="carousel-item" href="#one!"><img src="http://lorempixel.com/800/400/food/1"></a>
			<a class="carousel-item" href="#two!"><img src="http://lorempixel.com/800/400/food/2"></a>
			<a class="carousel-item" href="#three!"><img src="http://lorempixel.com/800/400/food/3"></a>
			<a class="carousel-item" href="#four!"><img src="http://lorempixel.com/800/400/food/4"></a>
		</div>
		<h1>Geo Proyecciones</h1>
		
		
		<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="black-text">Footer Content</h5>
                <p class="grey-text">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="black-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-darken-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-darken-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-darken-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-darken-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <p class="grey-text">© 2017 Copyright Text</p>
            <a class="grey-text text-darken-4 right" href="#!">More Links</a>
			<a class="grey-text text-darken-3 right" href="#!">Link 3</a>
            <a class="grey-text text-darken-3 right" href="#!">Link 4</a>
            </div>
          </div>
        </footer>
		
		<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav();
			$('.carousel.carousel-slider').carousel({full_width: true,time_constant:10,indicators:true});
		});
		</script>
	</body>
</html>