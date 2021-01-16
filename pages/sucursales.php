<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sucursales</title>
	<link rel="icon" href="../imagenes/icono.png" type="image/png">
	<link rel='stylesheet' type="text/css" id='bootstrap-css' href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/sucursales.css">
	<script type="text/javascript" src="../js/products.js" defer></script>
</head>
<body>
	<div class="wrapper">
    	<div class="wrap">
    		<div class="overlay">
    			<div class="slideshow">
    				<span class="btn_close">&times;</span>
    				<div class="btns back">
    					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>
    				</div>
    				<div class="btns forward">
    					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/></svg>
    				</div>
    				<img src="" alt="" id="img_slideshow">
    			</div>
    		</div>
    		<?php include ('../componentes/nav.html') ?>
    		<header>
    			<h1>Sucursales</h1>
                <h3>Occidente · Centro · Oriente</h3>
                <button class="btn_ver">Ver</button>
    		</header>
    		<section class="galery">
    			<div class="column">
    				<img src="../imagenes/tiendas/central.jpg" alt="" data-img-mostrar="0">
    				<img src="../imagenes/tiendas/central2.jpg" alt="" data-img-mostrar="1">
    				<img src="../imagenes/tiendas/ivu.jpg" alt="" data-img-mostrar="2">
                    <img src="../imagenes/tiendas/la25.jpg" alt="" data-img-mostrar="3">
                    <img src="../imagenes/tiendas/sanBenito.jpg" alt="" data-img-mostrar="4">
    			</div>
    			<div class="column">
    				<img src="../imagenes/tiendas/la31.jpg" alt="" data-img-mostrar="5">
    				<img src="../imagenes/tiendas/palmar.jpg" alt="" data-img-mostrar="6">
    				<img src="../imagenes/tiendas/matias.jpg" alt="" data-img-mostrar="7">
                    <img src="../imagenes/tiendas/elCarmen.jpg" alt="" data-img-mostrar="8">
                    <img src="../imagenes/tiendas/masferrer2.jpg" alt="" data-img-mostrar="9">
    			</div>
    			<div class="column">
                    <img src="../imagenes/tiendas/matias.jpg" alt="" data-img-mostrar="10">
    				<img src="../imagenes/tiendas/ataco.jpg" alt="" data-img-mostrar="11">
    				<img src="../imagenes/tiendas/escalon.jpg" alt="" data-img-mostrar="12">
    				<img src="../imagenes/tiendas/tuscania.jpg" alt="" data-img-mostrar="13">
                    <img src="../imagenes/tiendas/sanBenito2.jpg" alt="" data-img-mostrar="14">
    			</div>
    			<div class="column">
    				<img src="../imagenes/tiendas/laSkina.jpg" alt="" data-img-mostrar="15">
    				<img src="../imagenes/tiendas/lourdes.jpg" alt="" data-img-mostrar="16">
    				<img src="../imagenes/tiendas/lourdes2.jpg" alt="" data-img-mostrar="17">
                    <img src="../imagenes/tiendas/versalles.jpg" alt="" data-img-mostrar="18">
                    <img src="../imagenes/tiendas/santaRosa.jpg" alt="" data-img-mostrar="19">
    			</div>
    		</section>

    	</div>
    </div>

	<?php include('../componentes/footer.html')?>
<script>
	var p = document.querySelector('#tiendas');
	p.classList.add("active");
	var p = document.querySelector('#inicio');
	p.classList.remove("active");

    btn = document.querySelector('.btn_ver')
    btn.addEventListener('click', function(){
        window.scrollTo(0, 670);
    })
</script>
<script type="text/javascript" src="../js/sucursales.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>