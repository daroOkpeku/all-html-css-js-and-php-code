let slides = document.querySelectorAll('.slides img');
let prev =  document.querySelector('.prevBtn');
let next = document.querySelector('.nextBtn');


let counter = 0;

slides.forEach( function(slide, index){
slide.style.left = `${index * 100}%`;
});


next.addEventListener('click', function(){
counter++;
move();
});

prev.addEventListener('click', function(){
    counter--;
    move();
});



function move(){
    if(counter === slides.length){
        counter = 0;
    }
    else if(counter < 0){
      counter = slides.length-1;
    }
    slides.forEach(function(slide){
 slide.style.transition = `transform 0.5s ease-in-out`;
 slide.style.transform=`translateX(${-counter *100}%)`;
    });
}



let buyMe = document.querySelector('.buyMe');
let openModal = document.querySelector('.open-modal');
let closeBtn = document.querySelector('.close');


closeBtn.addEventListener('click', function back(){
    openModal.classList.remove('open-check');
    });

buyMe.addEventListener('click', function open(event){
  
 openModal.classList.toggle('open-check');
});


const date = document.querySelector(".date");
date.innerHTML = new Date().getFullYear();

