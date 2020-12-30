const navSlide = function(){

  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.links');

  burger.addEventListener('click', function(){

    nav.classList.toggle('links-active');
    
    burger.classList.toggle('toggle');
  });
}
navSlide();



/*var nav = document.querySelector('.header');

var topOFNav = nav.offsetTop;


function fixedNav() {

  console.log(topOFNav, window.scrollY);

}

window.addEventListener(scroll, fixedNav);*/



/*var turn = document.getElementById('turn');

var ear  = document.getElementById('ear');



function change(){
if(ear.style.display === "none"){
  ear.style.display = "block";
}else{
  ear.style.display = "none";
}

}


turn.addEventListener('click', change);*/




let backup = document.querySelector('.up');

window.addEventListener('scroll', function(){
  let above = window.pageYOffset;
  
if(above > 100){
  backup.classList.toggle('show', above);
}else{
  backup.classList.remove('show', above);
}
  
});



/*var image = [
  "dispenser2.0.jpg",
   "dispenser2.1.jpg",
   "dispenser2.2.jpg"
    
];

var i = 0;

function slide(){
document.getElementById('first-pic').src = image[i];
  if(i<image.length - 1){
    i++;
  }
  else{
    i = 0;
  }

}

setInterval(slide, 3000)*/
