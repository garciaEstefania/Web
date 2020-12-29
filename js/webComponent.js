export default class navbar extends HTMLElement {
		constructor() {
			super();
	}

	connectedCallback () { //este componente es similar a Component Willmounted cuando el elemwnto se va a insetar en el DOM
		let shadowRoot = this.attachShadow({mode: 'open'});
		const template = document.querySelector('#navBar');
		console.log('console: '+template.content);
		const instance = template.content.cloneNode(true);
		shadowRoot.appendChild(instance);
	}
}

window.customElements.define('nav-bar', navbar);