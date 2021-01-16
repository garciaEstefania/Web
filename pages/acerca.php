<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acerca de</title>
	<link rel="icon" href="../imagenes/icono.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="../css/acerca.css">
</head>
<body>
	<div class="main">
		<?php include ('../componentes/nav.html') ?>
		<div class="ac-container">
			<img class="img-history" src="../imagenes/tradicion2.jpg">
			<div class="text">
				<h1>Nuestra  Historia</h1>
				<p>Somos una empresa de tradición familiar, nacida en Santa Ana creada por, Don Emiliano Rivera Landaverde, en 1951; impulsada por el deseo de brindar un sorbete diferente, en cuanto a calidad 100% natural y artesanal. Luego de pasar un año entero desarrollando y perfeccionando su receta de sorbete artesanal, en 1951 la completó y le llamó: la receta “Sin Rival”; iniciando inmediatamente la venta del sorbete en un carretón en el centro de la ciudad de Santa Ana, siendo esa su actividad primaria de trabajo.<br><br>Con el paso de los años nuestra familia creció totalmente involucrada en la elaboración del sorbete con la receta <em>Sin Rival</em>, bajo la atenta mirada de nuestra papá, don Emiliano, siendo enormemente influenciados por la cultura de trabajo, dedicación y esfuerzo; con el paso del tiempo a nuestro padre se le conocía como <em>El Chele Sin Rival</em> en Santa Ana.<br><br>Poco a poco lo que ya era un proyecto familiar comenzó a expandirse, los dieciocho hijos de, don Emiliano, estaban comprometidos en la elaboración y venta: los varones vendiendo con los carritos y elaborando el sorbete, y por otro lado las mujeres de la familia elaborando el delicioso y característico <em>barquillo</em> que lo acompaña.</p>
			</div>
		</div>
		<div class="ac-container">
			<div class="text">
				<p>En 1991 la Cámara de Comercio e Industria de El Salvador nos otorgó el Premio al mérito como empresa destacada de la zona por los 40 años de trayectoria. Con el cariño y calor de la gente Santaneca, los sorbetes de El Sin Rival se hicieron conocidos incluso a nivel turístico en la región, marcando la pauta una nueva etapa en nuestra historia.<br><br>En 2003, iniciamos una nueva etapa de expansión, formalizando la empresa familiar y abriendo la primera sala de ventas en el centro de Santa Ana, adaptándonos a la demanda de los clientes, y comprometidos con la más alta calidad, los límites de los carretones quedaron atrás, brindando más productos, más sabores, más servicios. Más tarde, en el 2005, Don Emiliano recibió de la Cámara de Comercio e Industria de El Salvador el Premio Cafeto de Oro, máximo galardón a las empresas del occidente del país por excelencia empresarial y trayectoria.</p>
			</div>
			<img class="img-history" src="../imagenes/tradicion7.jpg">
			<img class="img-history" src="../imagenes/premio.jpg">
		</div>
		<div class="ac-container">
			<img class="img-history" src="../imagenes/tradicion6.jpg">
			<div class="text">
				<p>En 2014 <em>El Sin Rival</em> fue reconocido y premiado por la Alcaldía Municipal de Santa Ana por la trayectoria empresarial y aporte a la economía y generación de empleos en Santa Ana. Ese mismo año yo Victor Rivera fui incluido en el libro “Las 100 historias que siempre quise saber - Personas exitosas de El Salvador” de los autores Manuel Carranza y Ana Margarita Chávez Escobar.<br><br>
				En 2008 comenzon a llegar las franquicias de El Sin Rival a otros departamentos del país, y en 2018 a Los Ángeles, California, Estados Unidos. Actualmente contamos con más de 15 salas de venta en el país, una variedad más de 20 sabores, y seguimos trabajando para seguir brindandote el mejor sorbete artesanal desde El Salvador. Somos una familia con 70 años de tradición en el corazón de los santanecos. Esta es nuestra historia, de la que tú también formas parte. ¡Gracias por tu apoyo!</p>
				<p class="firma">Victor Rivera</p>
			</div>
		</div>
	</div>		

<script>
	var p = document.querySelector('#acerca');
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