<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acerca de</title>
	<link rel="icon" href="../imagenes/icono.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="../css/transition.css">
	<link rel="stylesheet" type="text/css" href="../css/cards.css">
</head>
<body>
	<div>
		<?php include ('../componentes/nav.html') ?>
	</div>		

<script>
	var p = document.querySelector('#contactos');
	p.classList.add("active");
	var p = document.querySelector('#inicio');
	p.classList.remove("active");

	btn = document.querySelector('.btn_ver')
	btn.addEventListener('click', function(){
		window.scrollTo(0, 662);
	})
</script>
</body>
</html>