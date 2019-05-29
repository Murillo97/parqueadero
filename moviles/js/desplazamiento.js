var boton = document.querySelector('.btn-bar');
var menu = document.querySelector('.menu-lateral');
var franjaAzul = document.querySelector('.container');

boton.addEventListener('click',function(){
  menu.classList.add('active');

})
  franjaAzul.addEventListener('click',function(){
    menu.classList.remove('active');
})
