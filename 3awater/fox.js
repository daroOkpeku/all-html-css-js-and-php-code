



var img =[
  "manualone.jpg",
  "manualtwo.jpg",
  "manualthree.jpg",
  "manualfour.jpg"

];

var i = 0;

function slide(){
 document.getElementById("first-pix").src = img[i];
  
  if(i<img.length-1){
    i++;
  }else{
    i=0;
  }
  
}





setInterval(slide, 5000);
slide();

var enter = document.getElementById('enter');
var overall = document.getElementById('overall');
var coal = document.getElementById('coal');


function openmodal(){
  overall.style.display = 'block';
}


function closemodal(){
  overall.style.display = 'none';
}

coal.addEventListener('click', closemodal);
enter.addEventListener('click', openmodal);





var frames = [
  'tablewater 1.0.jpg',
  'tablewater1.1.jpg',
  'tablewater 1.2.jpg'
];

var t = 0;

function display(){
document.getElementById('second-pic').src = frames[t];
  if(t<frames.length-1){
    t++;
  }else{
    t=0;
  }
}
setInterval(display, 4500);


let preloader = document.querySelector('.preloader');
window.addEventListener('load', function loading(){

  preloader.classList.add('hide');
  
});




var gold = [
  'dispenser water 1.0.jpeg',
   'dispenserwater 1.1.jpg',
  'dispenserwater1.2.jpg'
];

var q =0;

function sliver(){
  document.getElementById('second-pix').src=gold[q];
  if(q<gold.length-1){
    q++;
    
  }else{
    q=0;
  }
}
setInterval(sliver, 3000);




let snow = [
 'dispenser2.0.jpg',
  'dispenser 2.1.jpg',
  'dispenser 2.2.jpg'
  
];

var a = 0;

function kill(){
document.getElementById("first-pic").src = snow[a];
  if(a<snow.length-1){
    a++;
  }else{
    
    a = 0;
  }
  
  
}
setInterval(kill, 2000);


