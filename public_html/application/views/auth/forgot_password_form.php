<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}
?>
<!DOCTYPE html>
<html lang="en-us" id="extr-page">
	<head>
		<meta charset="utf-8">
		<title>World live</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- #CSS Links -->
		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="/template/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="/template/css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
		<link rel="stylesheet" type="text/css" media="screen" href="/template/css/smartadmin-production.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="/template/css/smartadmin-skins.min.css">

		<!-- SmartAdmin RTL Support is under construction
			 This RTL CSS will be released in version 1.5
		<link rel="stylesheet" type="text/css" media="screen" href="/template/css/smartadmin-rtl.min.css"> -->

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="/template/css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="/template/css/demo.min.css">

		<!-- #FAVICONS -->
		<link rel="shortcut icon" href="/template/img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/template/img/favicon/favicon.ico" type="image/x-icon">

		<!-- #GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- #APP SCREEN / ICONS -->
		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="/template/img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/template/img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/template/img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/template/img/splash/touch-icon-ipad-retina.png">
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="/template/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="/template/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="/template/img/splash/iphone.png" media="screen and (max-device-width: 320px)">

	</head>
	
	<body class="animated fadeInDown">

		<header id="header" class="fade in">
			<br />
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1>Sistema Integral de Operaciones</h1>
			</div>
		</header>

		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container">
				<div class="row">
				<div class="col-sm-3 col-lg-4">
				</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
						<div class="well no-padding">
							<form id="login-form" method="POST" action="/auth/forgot_password" class="smart-form client-form">
								<header>
									Recuperar mi contraseña
								</header>

								<fieldset>
			<?php
									
				if(isset($data['errors']))
				{

				if(isset($data['errors']['login']))
					{
										
					echo '<div class="alert alert-danger fade in">
								<button class="close" data-dismiss="alert">
									×
								</button>
								<i class="fa-fw fa fa-times"></i>
								<strong>Error!</strong> El email no existe.
							</div>';
					}
				}
									
								?>
									<section>
										<label class="label">Correo</label>
										<label class="input"> <i class="icon-append fa fa-user"></i>
											<input required type="email" name="login">
											<b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Ingrese su cuenta de correo</b></label>
									</section>
								</fieldset>
								<footer>
									<!--<div id="logo-group">
										<span id="logo"> <img class="imagen_psswrd" src="/wl.png" alt="Worldlive"> </span>
									</div>-->
									<button id="enviar" type="submit" class="btn btn-primary">
										Enviar
									</button>
									<button type="button" onclick="location.href='/auth/login'" class="btn btn-danger">
										Cancelar
									</button>
								</footer>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!--================================================== -->	
		<style type="text/css" media="screen">
			
			#header
			{
				text-align: center; 
				color: #FFF !important;
				background: #2A9BDD !important;

			}
			#compania{width: 10%; margin: 0 auto;}
			#header h1{margin-top: -5px;}
			#login-form{
				-webkit-box-shadow: inset 0px 0px 10px #000;
				-moz-box-shadow: inset 0px 0px 10px #000;
				box-shadow: inset 0px 0px 10px #000;
			}
			#enviar{color: #FFF; font-weight: initial;}
			.header2{text-align: center; padding-bottom: 10px;}
			.img2{margin-top: 14%}
			#footer
			{
				height: 102px;
				text-align: center;color: #FFF !important;
				background: #2A9BDD !important;
			}
		</style>
		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script src="/template/js/plugin/pace/pace.min.js"></script>

	    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script> if (!window.jQuery) { document.write('<script src="/template/js/libs/jquery-2.0.2.min.js"><\/script>');} </script>

	    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script> if (!window.jQuery.ui) { document.write('<script src="/template/js/libs/jquery-ui-1.10.3.min.js"><\/script>');} </script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events 		
		<script src="/template/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

		<!-- BOOTSTRAP JS -->		
		<script src="/template/js/bootstrap/bootstrap.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="/template/js/plugin/jquery-validate/jquery.validate.min.js"></script>
		
		<!-- JQUERY MASKED INPUT -->
		<script src="/template/js/plugin/masked-input/jquery.maskedinput.min.js"></script>
		
		<!--[if IE 8]>
			
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
			
		<![endif]-->

		<!-- MAIN APP JS FILE -->
		<script src="/template/js/app.min.js"></script>

		<script type="text/javascript">
			runAllForms();

			$(function() {
				// Validation
				$("#login-form").validate({
					// Rules for form validation
					rules : {
						email : {
							required : true,
							email : true
						}
					},

					// Messages for form validation
					messages : {
						email : {
							required : 'Por favor ingresa una cuenta de correo',
							email : 'Porfavor ingresa una cuenta de correo valida'
						}
					},

					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});
			});
		</script>

	</body>
</html>