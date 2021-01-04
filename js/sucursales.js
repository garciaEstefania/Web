document.addEventListener('DOMContentLoaded', function (){

	let imagenes = [
		{img: "../imagenes/tiendas/central.jpg"},
		{img: "../imagenes/tiendas/central2.jpg"},
		{img: "../imagenes/tiendas/ivu.jpg"},
		{img: "../imagenes/tiendas/la25.jpg"},
		{img: "../imagenes/tiendas/sanBenito.jpg"},
		{img: "../imagenes/tiendas/la31.jpg"},
		{img: "../imagenes/tiendas/palmar.jpg"},
		{img: "../imagenes/tiendas/matias.jpg"},
		{img: "../imagenes/tiendas/elCarmen.jpg"},
		{img: "../imagenes/tiendas/masferrer.jpg"},
		{img: "../imagenes/tiendas/matias.jpg"},
		{img: "../imagenes/tiendas/ataco.jpg"},
		{img: "../imagenes/tiendas/escalon.jpg"},
		{img: "../imagenes/tiendas/tuscaania.jpg"},
		{img: "../imagenes/tiendas/sanBenito2.jpg"},
		{img: "../imagenes/tiendas/laSkina.jpg"},
		{img: "../imagenes/tiendas/lourdes.jpg"},
		{img: "../imagenes/tiendas/lourdes2.jpg"},
		{img: "../imagenes/tiendas/versalles.jpg"},
		{img: "../imagenes/tiendas/santaRosa.jpg"},
	]
	let contador = 0;
	contenedor = document.querySelector('.slideshow')
	overlay = document.querySelector(".overlay")
	galery = document.querySelectorAll(".galery img")
	img_slideshow = document.querySelector(".slideshow img")

	contenedor.addEventListener('click', function(e){
		let back = contenedor.querySelector('.back'),
			forward = contenedor.querySelector('.forward'),
			img = contenedor.querySelector('img'),
			tgt = event.target
		if (tgt == back){
			if (contador > 0){
				img.src = imagenes[contador - 1].img
				contador--
			}else{
				img.src = imagenes[imagenes.length -1].img
				contador = imagenes.length-1
			}
		}else if(tgt == forward){
			if(contador < imagenes.length - 1){
				img.src = imagenes[contador + 1].img
				contador++
			}else{
				img.src = imagenes[0].img
				contador = 0
			}
		}
	})

	Array.from(galery).forEach(img => {

		img.addEventListener('click', function(e){
			const selected = +e.target.dataset.imgMostrar;
			img_slideshow.src = imagenes[selected].img
			contador = selected
			overlay.style.opacity = 1 
			overlay.style.visibility = 'visible'
		})
	})

	document.querySelector('.btn_close').addEventListener('click', () =>{
		overlay.style.opacity = 0;
		overlay.style.visibility = 'hidden'
	})
})
