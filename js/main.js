function show(){
		const menu_items = document.querySelector('.menu_items')
		menu_items.classList.toggle('show')
	}
	
function load() {
	console.log('hola')
	const menu = document.querySelector('#btn_menu')
	menu.addEventListener('click', function(){
		const menu_items = document.querySelector('.menu_items')
		menu_items.classList.toggle('show')
	})
}


document.addEventListener("DOMContentLoaded", load());