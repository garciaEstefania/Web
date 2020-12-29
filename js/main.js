function show(){
		const menu_items = document.querySelector('.menu_items')
		menu_items.classList.toggle('show')
	}
	
	function load() {
		const btnMenu = document.getElementById('btn_menu')
		
	if(btnMenu){
		console.log(btnMenu)
		btnMenu.addEventlistener("click", show());
		}
	}


	

document.addEventListener("DOMContentLoaded", load());