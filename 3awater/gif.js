let preloader = document.querySelector('.preloader');
window.addEventListener('load', function loading(){

  preloader.classList.add('hide');
 
});



var turn = document.getElementById('turn');

var ear  = document.getElementById('ear');

turn.addEventListener('click', change);

function change(){
if(ear.style.display === "none"){
  ear.style.display = "block";
}else{
  ear.style.display = "none";
}

}