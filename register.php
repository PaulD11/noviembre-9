<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Classimax | Classified Marketplace Template</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

  <!-- favicon -->
  <link href="images/favicon.png" rel="shortcut icon">

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="plugins/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick/slick-theme.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper">


  <header>
    <!-- Contener input de busqueda, iniciar sesión y registrarse. -->
    <nav class="navbar navbar-expand-lg" id="navHeader">
			<div class="container">
				<a class="navbar-brand logoP" href="../../index.html"><img src="images/logo-Positivo.png"
						alt="Logo"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="¿Qué buscas?" aria-label="Search">
						<button class="bi bi-search btn-success"></i></button>
					</form>
					<ul class="navbar-nav ml-auto main-nav">
						<li class="nav-item active">
							<a class="nav-link" href="../../index.html">Inicio</a>
						</li>
						<li class="nav-item dropdown dropdown-slide @@dashboard">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!">Catalogo<span><i
										class="fa fa-angle-down"></i></span>
							</a>

							<!-- Dropdown list -->
							<ul class="dropdown-menu">
								<li>
									<a class="dropdown-item @@dashboardPage submenu" href="ad-list-view.html">Productos</a>
								</li>
								<li class="nav-item dropdown dropdown-slide @@pages">
									<a class="dropdown-item submenu" href="">Ofertas</a>
								</li>
							</ul>
						</li>

						<li class="nav-item dropdown dropdown-slide @@pages">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">Acerca de<span><i class="fa fa-angle-down"></i></span></a>

							<!-- Dropdown list -->
							<ul class="dropdown-menu">
								<li>
									<a class="dropdown-item @@about submenu" href="about-us.html">¿Quiénes somos?</a>
								</li>

								<li class="nav-item dropdown dropdown-slide @@pages">
									<a class="dropdown-item submenu" href="">Ayuda/PQR</a>
								</li>

								<li>
									<a class="dropdown-item @@about submenu" href="contact-us.html">Contactanos</a>
								</li>
								<li>
									<a class="dropdown-item @@terms submenu" href="terms-condition.html">Terminos &amp;
										Condiciones</a>
								</li>
							</ul>
						</li>


						<li class="nav-item dropdown dropdown-slide @@pages">
							<a class="nav-link dropdown-toggle bi bi-cart" href="dashboard-favourite-ads.html"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Carrito</a>
						</li>

						<!-- <a class="btn text-aling-center login-button" href="login.html" role="button"><b>Iniciar Sesión</b></a>
						<a class="btn btn-success text-aling-center register-button" href="register.html" role="button"><b>Resistrarse</b></a> -->
						<div class="contRegistrosSesion">
							<ul class="nav-item dropdown dropdown-slide">
								<li class="nav-item dropdown dropdown-slide">
									<a class="nav-link btn-success register-button" href="login.php"><i
									    class="bi bi-person-plus"></i><b> Iniciar Sesion</b></a>
								</li>
							</ul>
						</div>

					</ul>
				</div>
			</div>
		</nav>
  </header>

  <div class="borderRegister">
    <!--?CAJA DEL TITULO DE REGISTRO-->
    <h3 class="bg-gray-1 logRegis">Registrate</h3>
  </div>


  <!--?CAJAS DE REGISTRO-->
  <section class="login-3  cont-global">
    <div class="container">
      <div class="row ">
        <div class="col-lg-6 align-item-center">
          <div class="borde">
            <form action="../../controller/insertUserE.php" method="POST">
              <!--?CAJA DE REGISTRO IZQUIERDA-->
              <fieldset class="login-1">
                <input class="form-control mb-3" type="text" name="nombres" placeholder="Nombre*" required>
                <input class="form-control mb-3" type="text" name="apellidos" placeholder="Apellidos*" required>
                <input class="form-control mb-3" type="number" name="celular" placeholder="Numero Celular*">
                <input class="form-control mb-3" type="number" name="telefono" placeholder="Telefono*   (Opcional)">
                <input class="form-control mb-3" type="email" name="email" placeholder="Email*" required>

              </fieldset>
          </div>
        </div>
        <div class="col-lg-6 align-item-center">
          <div class="borde-2">
              <!--?CAJA DE REGISTRO DERECHA-->
              <fieldset class="login-2">
                <input class="form-control mb-3" type="text" name="direccion" placeholder="Direccion*" required>
                <input class="form-control mb-3" type="text" name="clave" placeholder="Clave*" required>
                <input class="form-control mb-3" type="text" name="clave2" placeholder="Confirmar clave*" required>
                <div class="loggedin-forgot d-inline-flex my-3">
                  <input type="checkbox" id="registering" class="mt-1" required>
                  <label for="registering" class="px-2">Para registrarse, debes aceptar nuestros <a
                      class="text-success font-weight-bold" href="terms-condition.html">Terminos y
                      Condiciones.</a></label>
                </div>
                <button type="submit" class="btn btn-success font-weight-bold mt-3">REGISTRARSE</button>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0 mb-4 mb-lg-0">
          <!-- About -->
          <div class="block about">
            <!-- footer logo -->
            <img src="images/logo.png" alt="logo">
            <!-- description -->
            <p class="alt-color">El proyecto RainTED se enfoca en las necesidades de las empresas en su
              producción, ayudando en la oferta de sus productos, incrementando las ganacias generadas en la empresa.
            </p>
          </div>
        </div>

        <!-- Link list -->
        <div class="col-lg-2 offset-lg-1 col-md-3 col-6 mb-4 mb-lg-0">
          <div class="block">
            <h4>Site Pages</h4>
            <ul>
              <li><a href="dashboard-my-ads.html">Perfil</a></li>
              <li><a href="dashboard-favourite-ads.html">Agregados al carrito</a></li>
              <li><a href="dashboard-archived-ads.html">Productos comprados</a></li>
              <!-- <li><a href="dashboard-pending-ads.html">Pending Ads</a></li> 
          <li><a href="terms-condition.html">Terms & Conditions</a></li> -->
            </ul>
          </div>
        </div>

        <!-- Link list -->
        <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0 col-6 mb-4 mb-md-0">
          <div class="block">
            <h4>Admin Pages</h4>
            <ul>
              <li><a href="category.html">Category</a></li>
              <li><a href="single.html">Single Page</a></li>
              <li><a href="store.html">Store Single</a></li>
              <!-- <li><a href="single-blog.html">Single Post</a></li> 
          <li><a href="blog.html">Blog</a></li>-->

            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <!-- Container End -->
  </footer>
    <!-- Footer Bottom -->
    <footer class="footer-bottom">
      <!-- Container Start -->
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
            <!-- Copyright -->
            <div class="copyright">
              <p>Copyright &copy;
                <script>
                  var CurrentYear = new Date().getFullYear()
                  document.write(CurrentYear)
                </script>. Designed & Developed by <a class="text-white" href="https://themefisher.com">Themefisher</a>
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <!-- Social Icons -->
            <ul class="social-media-icons text-center text-lg-right">
              <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher"></a></li>
              <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher"></a></li>
              <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher"></a></li>
              <li><a class="fa fa-github-alt" href="https://www.github.com/themefisher"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Container End -->
      <!-- To Top -->
      <div class="scroll-top-to">
        <i class="fa fa-angle-up"></i>
      </div>
    </footer>

    <!-- 
Essential Scripts
=====================================-->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/popper.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/bootstrap/bootstrap-slider.js"></script>
    <script src="plugins/tether/js/tether.min.js"></script>
    <script src="plugins/raty/jquery.raty-fa.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <script src="plugins/google-map/map.js" defer></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>

</body>

</html>