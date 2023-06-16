const menuBurger = document.querySelector('.menu-burger');
const menu = document.querySelector('.menu');
const closeBtn = document.querySelector('.close-btn');

menuBurger.addEventListener('click', function() {
menu.classList.toggle('active');
});

closeBtn.addEventListener('click', function() {
menu.classList.remove('active');
});
