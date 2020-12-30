let nextBtn = document.querySelector(".nextBtn");
let prevBtn = document.querySelector(".prevBtn");
let slide = document.querySelectorAll(".slide");
let counter = 0;

slide.forEach(function (one, index) {
  one.style.left = `${index * 100}%`;
});

nextBtn.addEventListener("click", function () {
  counter++;
  move();
});
prevBtn.addEventListener("click", function () {
  counter--;
  move();
});

/*setInterval(function me() {
  move();

  counter++;
}, 2000);*/

function move() {
  if (counter > slide.length - 1) {
    counter = 0;
  }
  if (counter < 0) {
    counter = slide.length - 1;
  }
  slide.forEach(function (one) {
    one.style.transform = `translateX(${-counter * 100}%)`;
    one.style.transition = "transform  ease-in 0.5s";
  });
}

let all = document.querySelector(".total");
let links = document.querySelectorAll(".link");
let road = document.querySelectorAll(".road");

all.addEventListener("click", function (e) {
  let id = e.target.dataset.id;
  if (id) {
    links.forEach(function (link) {
      link.classList.remove("active");
    });
    e.target.classList.add("active");
    road.forEach(function (one) {
      one.classList.remove("active");
    });
    let element = document.getElementById(id);
    element.classList.add("active");
  }
});

let rod = document.querySelector(".rod");
let month = document.querySelector(".month");
rod.textContent = new Date().getFullYear();
