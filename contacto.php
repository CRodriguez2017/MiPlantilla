<?php
//Definimos la codificación de la cabecera.
header('Content-Type: text/html; charset=utf-8');
//Importamos el archivo con las validaciones.
require_once 'Formulario/funciones/validaciones.php';
//Guarda los valores de los campos en variables, siempre y cuando se haya enviado el formulario, sino se guardará null.
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : null;
//Este array guardará los errores de validación que surjan.
$errores = array();
//Pregunta si está llegando una petición por POST, lo que significa que el usuario envió el formulario.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Valida que el campo nombre no esté vacío.
    if (!validaRequerido($nombre) || (is_numeric($nombre))) {
        $errores[] = 'El campo nombre es incorrecto.';
    }
    if (!validaRequerido($apellidos) || (is_numeric($apellidos))) {
        $errores[] = 'El campo apellidos es incorrecto.';
    }
    //Valida la edad con un rango de 3 a 130 años.
    $opciones_telefono = array(
        'options' => array(
            //Definimos el rango de edad entre 3 a 130.
            'min_range' => 5,
            'max_range' => 9999999999
        )
    );
    if (!validarEntero($telefono, $opciones_telefono)) {
        $errores[] = 'El campo Telefono es incorrecto.';
    }
    //Valida que el campo email sea correcto.
    if (!validaEmail($email)) {
        $errores[] = 'El campo email es incorrecto.';
    }
    //Verifica si ha encontrado errores y de no haber redirige a la página con el mensaje de que pasó la validación.
    if(!$errores){
        session_start();
        $_SESSION['UserNames']=$_REQUEST['nombre'];
        $_SESSION['UserLastNames']=$_REQUEST['apellidos'];
        $_SESSION['Telefono']=$_REQUEST['telefono']; 
        $_SESSION['Correo']=$_REQUEST['email']; 
        $_SESSION['Asunto']=$_REQUEST['asunto'];
        $_SESSION['Mensaje']=$_REQUEST['mensaje'];
        header('Location: Resultado.php');
        exit();
        
    }
}
?>

<!DOCTYPE HTML>
<!--
	Ex Machina by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Contáctame</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="images/CR.png" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="no-sidebar">

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="perfilPersonal.php">Perfil Personal</a></li>
							<li><a href="perfilLaboral.php">Perfil Profesional</a></li>
							<li class="active"><a href="contacto.php">Contacto</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
		
	<!-- Banner -->
		<div id="banner">
			<div class="container">
			</div>
		</div>
	<!-- /Banner -->

	<!-- Main -->
		<div id="page">
				
			<!-- Main -->
			<div id="main" class="container">
				<div class="row">
					<div class="12u">
						<section>
							<header>
								<h2>Formulario</h2>
								<span class="byline">Dormir con las ideas acordes con las actitudes...</span>
							</header>
							<div id="Formulario">
								<?php if ($errores): ?>
						            <ul style="color: #f00;">
						                <div class="alert alert-warning alert-dismissible fade show" role="alert">
						                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						                                <span aria-hidden="true">&times;</span>
						                            </button>
						                                <strong>Datos Incorrectos!</strong>
						                        
						                    <?php foreach ($errores as $error): ?>
						                        <li> <?php echo $error ?> </li>
						                    <?php endforeach; ?>
						                </div>
						            </ul>
            
        						<?php endif; ?>
								<?php 

									require_once("Formulario/index.php");
								 ?>

							</div>
						</section>
					</div>

				</div>
			</div>
			<!-- Main -->

		</div>
	<!-- /Main -->

	<!-- Featured -->
		<div id="featured">
			<div class="container">
				<div class="row">
					<section class="4u">
						<div class="box">
							<a href="https://www.americadecali.co/" class="image left" target="_blank"><img src="images/America.jpg" alt=""></a>
							<h3>Mi equipo favorito</h3>
							<p>America de Cali. </p>
							<a href="https://www.americadecali.co/" class="button" target="_blank">AMERICA</a>
						</div>
					</section>
					<section class="4u">
						<div class="box">
							<a href="https://es.wikipedia.org/wiki/Rojo" class="image left" target="_blank"><img src="images/Rojo.jpg" alt=""></a>
							<h3>Mi color favorito</h3>
							<p>El rojo. </p>
							<a href="https://es.wikipedia.org/wiki/Rojo" class="button" target="_blank">ROJO</a>
						</div>
					</section>
					<section class="4u">
						<div class="box">
							<a href="https://es.wikipedia.org/wiki/Dub%C3%A1i" class="image left" target="_blank"><img src="images/Dubai.jpg" alt=""></a>
							<h3>Mi lugar favorito</h3>
							<p>Dubai. </p>
							<a href="https://es.wikipedia.org/wiki/Dub%C3%A1i" class="button" target="_blank">DUBAI</a>
						</div>
					</section>
				</div>
				<div class="divider"></div>
			</div>
		</div>
	<!-- /Featured -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="3u">
						<section>
							<h2>Frase personal</h2>
							<div class="balloon">
								<blockquote>&ldquo;&nbsp;&nbsp;¿Sabes porque soy Feliz?... Porque yo no apago la luz de nadie para encender la mia, simplemente oro a Dios día a día para que mis sueños se cumplan sin tener que lastimar a alguien.... .&nbsp;&nbsp;&rdquo;<br>
									<br>
									<strong>&ndash;&nbsp;&nbsp;Christian Rodriguez.</strong></blockquote>
							</div>
							<div class="ballon-bgbtm">&nbsp;</div>
						</section>
					</div>
					<div class="3u">
						<section>
							<h2>Futbolista</h2>
							<ul class="default">
								<li>
									<h3>Unos de mis sueños...</h3>
								</li>
								<li>
									<h3>Mi pasion...</h3>	
								</li>
								<li>
									<h3>Mis esfuerzos</h3>
								</li>
							</ul>
						</section>
					</div>
					<div class="3u">
						<section>
							<h2>Mis Pasatiempos</h2>
							<p>Me gusta pasear, disfrutar de la vida</p>
							<ul class="style5">
								<li><a href="#"><img src="images/1.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/2.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/3.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/4.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/5.jpg" alt=""></a></li>
								<li><a href="#"><img src="images/6.jpg" alt=""></a></li>
							</ul>
							<a href="#" class="button">More Collections</a>
						</section>
					</div>
					
				</div>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright" class="container">
			Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
		</div>


	</body>
</html>