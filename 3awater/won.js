let road = document.querySelector('.road');
let speech = document.querySelector('.speech');


road.addEventListener('click', function go(){
speech.classList.toggle('speech-active');
road.classList.toggle('toggle');
});





let sec = document.querySelector('.sec');
let lod = document.querySelector('.lod');



lod.addEventListener('click', function open(){
    sec.classList.toggle('sec-active');
    lod.classList.toggle('turn');
});





let preloader = document.querySelector('.preloader');
window.addEventListener('load', function loading(){

  preloader.classList.add('hide');
  
});