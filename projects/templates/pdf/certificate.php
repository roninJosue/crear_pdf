<!doctype html>
<html lang="en">

<head>
	<title>Curso de Laravel 5</title>
	<link rel="stylesheet" href="C:/xampp/htdocs/create_pdf/projects/public/css/freeze.css">
</head>

<body>
<div class="wrapper">
	<section id="getApp" class="altura">
		<div class="container-fluid">
			<div class="centrado">
				<img src="C:/xampp/htdocs/create_pdf/projects/public/img/freeze/logo.png" alt="">
				<p class="margenTop">Certif&iacute;ca a</p>
				<p class="text-blanco"><?= $name ?></p>
				<p>Por haber aprobado el curso de</p>
				<p class="text-blanco"><?= $course ?></p>
			</div>

		</div>

	</section>

</div>
		<div class="fondo2">
			<?php
				echo date("Y/m/d"); 
			?>
	</div>
</body>

</html>

