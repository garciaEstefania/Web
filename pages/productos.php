<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Productos</title>
	<link rel="icon" href="../imagenes/icono.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="../css/transition.css">
	<link rel="stylesheet" type="text/css" href="../css/cards.css">
</head>
<body>
	<div id="main">
		<?php include ('../componentes/nav.html') ?>
		<div class="main-section">
			<h1>Nuestro Producto</h1>
			<h3>Es 100% natural y artesanal</h3>
			<div class="div-btns">
				<button id="sabores">SABORES</button>
				<button id="presentaciones">PRESENTACIONES</button>
				<button id="parallevar">PARA LLEVAR</button>
			</div>
		</div>
		<div id="page">
			<section class="one">
				<h2 class="section-title">Sabores</h2>
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
								<li>Fresa con crema</li>
								<li>Tres leches</li>
								<li>Chocolate</li>
								<li></li>
							</ul>
						</div>
					</li>
				</ul>
			<div class="next"></div>
			</section>
			<section class="two">
				<h2 class="section-title">Presentaciones</h2>
				<?php include ('../componentes/productos.html') ?>
				<div class="next"></div>
			</section>
			<section class="three">
				<h2 class="section-title">Presentaciones</h2>
				<?php include ('../componentes/productos2.html') ?>
				<div class="next"></div>
			</section>
			<section class="four">
				<h2 class="section-title">Para  llevar</h2>
				<?php include ('../componentes/productos3.html') ?>
				<div class="next"></div>
			</section>
			<section class="five">
				<h2 class="section-title">De El Salvador para el Mundo</h2>
				<div class="div-sec-five">
					<img class="img-sec-five" src="../imagenes/santaAna.jpg" alt="Catedral Santa Ana">
					<div class="div-sec-five-info">
						<h2>¿Qué incluye?</h2>
						<div class="item">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-check2-circle" viewBox="0 0 16 16"><path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/><path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
							</svg>
							<p><strong>5</strong> 1/4 de galón</p>
						</div>
						<div class="item">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-check2-circle" viewBox="0 0 16 16"><path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/><path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
							</svg>
							<p><strong>5</strong> diferentes sabores (de tu elección)</p>
						</div>
						<div class="item">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-check2-circle" viewBox="0 0 16 16"><path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/><path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
							</svg>
							<p><strong>1</strong> Hielera (peso: 10 lb)</p>
						</div>
						<div class="div-sec-price">
							<label>Precio<br><span>$ 30.00 (iva incluido)</span></label>
							<p>Puedes reservar tu pedido con al menos 3 dias de anticipación</p>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	
<script>
	var p = document.querySelector('#productos');
	p.classList.add("active");
	var p = document.querySelector('#inicio');
	p.classList.remove("active");

	btn = document.querySelector('#sabores')
	btn.addEventListener('click', function(){
		window.scrollTo(0, 662);
	})
	btn = document.querySelector('#presentaciones')
	btn.addEventListener('click', function(){
		window.scrollTo(0, 1324);
	})
	btn = document.querySelector('#parallevar')
	btn.addEventListener('click', function(){
		window.scrollTo(0, 2648);
	})
</script>
<script type="text/javascript" src="../js/transition.js"></script>
</body>
</html>