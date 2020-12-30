<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<title>Productos</title>
</head>
<body>
	<?php include ('../componentes/nav.html') ?>
</body>
<script>
	var p = document.querySelector('#productos');
	p.classList.add("active");
	var p = document.querySelector('#inicio');
	p.classList.remove("active");
</script>
</html>