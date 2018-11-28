console.log("hello world!");

var menuButton = document.querySelector(".menu-btn"),
modalMenu = document.querySelector(".menu-modal");

menuButton.addEventListener('click', function(){
	this.classList.toggle("menu-btn-active");
	modalMenu.classList.toggle("modal-active");
});
