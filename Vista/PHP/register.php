<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro || INVOICE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vista/plugins/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vista/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vista/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vista/plugins/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vista/plugins/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vista/plugins/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vista/plugins/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vista/plugins/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/Vista/CSS/util.css">
	<link rel="stylesheet" type="text/css" href="/vista/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="../../Controlador/Login/registro.php" method="POST">
					<div class="back"><a href="../../index.php"><i class="bi bi-arrow-left-circle-fill h2"></i></a></div>
					<span class="login100-form-title p-b-32">
						Account Register
					</span>
					<!--Start Alert-->
						<?php
							include '../../Modelo/Alertas/Registro.php';
        				?>
					<!--End Alert-->

					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Usuario
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "User is required">
						<input class="input100" type="text" name="user" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Password Repeat
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password Repeat">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="passR" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="accept">
							<label class="label-checkbox100" for="ckb1">
								Acepto los <a href="">terminos</a> y/o Condiciones.
							</label>
						</div>

						<div style="position: relative; top: 110%; left: -66%;">
							<a href="./login.php" class="txt3">
								Ya tienes una cuenta?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="/vista/plugins/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vista/plugins/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vista/plugins/vendor/bootstrap/js/popper.js"></script>
	<script src="/vista/plugins/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vista/plugins/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vista/plugins/vendor/daterangepicker/moment.min.js"></script>
	<script src="/vista/plugins/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vista/plugins/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/vista/js/second.js"></script>

</body>
</html>