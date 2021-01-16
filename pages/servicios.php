<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Servicios</title>
	<link rel="icon" href="../imagenes/icono.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="../css/transition.css">
	<link rel="stylesheet" type="text/css" href="../css/cards.css">
</head>
<body>
	<div>
		<?php include ('../componentes/nav.html') ?>
		<div class="main-section">
			<div>
				<h1>Servicios</h1>
			</div>
			<div>
				<p>Tenemos a tu disposición, nuestros carretones de sorbete para tus eventos o celebraciones especiales</p> 
				<div class="column">
					<button class="btn_ver">Ver</button>
				</div>
			</div>
		</div>
		<div id="page">
			<section class="one">
				<h2 class="section-title">·SABORES·</h2>
				<ul class="flip-cards">
					<li class="cards" ontouchstart="this.classList.toggle('hover');">
						<div class="large button card-front">
							<h2>De Temporada</h2>
						</div>
						<div class="panel card-back">
							<ul class="flavors">
								<li>Jocote</li>
								<li>Nance</li>
								<li>Arrayan</li>
								<li>Naranja Mamey</li>
								<li>Mango verde</li>
							</ul>
						</div>
					</li>
					<li class="cards" ontouchstart="this.classList.toggle('hover');">
						<div class="large button card-front">
						<h2>Nieves y con Leche</h2>
						</div>
						<div class="panel card-back">
							  <ul class="flavors">
								<li>Mora</li>
								<li>Ensalada</li>
								<li>Maracuyá</li>
								<li>Coco</li>
								<li>Fresa</li>
								<li>Guineo con leche</li>
								<li>Zapote con leche</li>
								<li>Frese con leche</li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</div>
					</li>
				</ul>
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
	var p = document.querySelector('#servicios');
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