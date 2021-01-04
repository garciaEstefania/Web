<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Productos</title>
	<link rel="icon" href="../imagenes/icono.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="../css/transition.css">
</head>
<body>
	<div ids="main">
		<?php include ('../componentes/nav.html') ?>
		<div class="main-section">
			<div>
				<h1>Productos</h1>
			</div>
			<div>
				<p>Te presentamos la variedad de sabores, entre ellos elaborados a base de leche y otros la fruta convertida en nieve. Además, contamos con diferentes presentaciones para comer en nuestras tiendas o para llevar</p> 
				<div class="column">
					<button class="btn_ver">Ver</button>
				</div>
			</div>
		</div>
		<div id="page">
			<section class="one">
			<div>
				<h2>Sabores</h2>

			</div>
			<div class="next"></div>
			</section>
			<section class="two">
			<div>
				
			</div>
			<div class="next"></div>
			</section>
			<section class="three">
			<div>Use Cubic Bezier!</div>
			<div class="next"></div>
			</section>
			<section class="four">
			<div>Or any Timing Function</div>
			<div class="next"></div>
			</section>
			<section class="one">
			<div>You've reached the end.</div>
			</section>
		</div>
	</div>
</body>
<script>
	var p = document.querySelector('#productos');
	p.classList.add("active");
	var p = document.querySelector('#inicio');
	p.classList.remove("active");

	btn = document.querySelector('.btn_ver')
	btn.addEventListener('click', function(){
		window.scrollTo(0, 662);
	})
</script>
<script type="text/javascript" src="../js/transition.js"></script>
</html>