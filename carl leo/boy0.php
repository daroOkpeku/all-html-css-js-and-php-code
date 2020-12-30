//this is the array of items that is looped through the website
const menu = [
{
id: 1,
title: "naked shirt",
category: "shirt",
price: 5000,
img: "./images/boy1.jpg",
desc: `White 100%cotton t shirt comes in different colours `,
},
{
id: 2,
title: "Tomorrow shirt",
category: "shirt",
price: 5000,
img: "./images/boy2.jpg",
desc: `Black t shirt 100% cotton comes in different colors and sizes. `,
},
{
id: 3,
title: "bottle shirt",
category: "shirt",
price: 5000,
img: "./images/boy3.jpg",
desc: `White t shirt 100% cotton comes in different colors and sizes.`,
},
{
id: 4,
title: "Bart Simpson shirt",
category: "shirt",
price: 5000,
img: "./images/boy4.jpg",
desc: `Orange t shirt 100% cotton comes in different colors and sizes. `,
},
{
id: 5,
title: "Trap shirt",
category: "shirt",
price: 5000,
img: "./images/boy5.jpg",
desc: `Orange t shirt 100% cotton comes in different colors and sizes. `,
},

{
id: 6,
title: "savage shirt",
category: "shirt",
price: 5000,
img: "./images/boy6.jpg",
desc: `Savage t shirt mixed with orange comes in different sizes and colors. `,
},
{
id: 7,
title: "Combat cargo",
category: "trouser",
price: 5000,
img: "./images/boy7.jpg",
desc: `Orange joggers comes in different colors and sizes four pockets`,
},
{
id: 8,
title: "Bleached hoodie",
category: "joggers",
price: 5000,
img: "./images/boy8.jpg",
desc: `Bleached hoodie comes in different sizes and colors.`,
},

{
id: 9,
title: "Pink hoodie",
category: "joggers",
price: 5000,
img: "./images/boy10.jpg",
desc: `Pink hoodie unisex comes in different sizes and colors.`,
},
{
id: 10,
title: "carton brown Shirt",
category: "shirt",
price: 5000,
img: "./images/boy11.jpg",
desc: `Brown plain t shirt 100% cotton comes in different colors and sizes.`,
},
{
id: 11,
title: "Red black stripes T shirt",
category: "special",
price: 5000,
img: "./images/boy12.jpg",
desc: `Carl leo standout stripe shirt 100% cotton.`,
},

{
id: 12,
title: "Carl leo cl hoodie",
category: "joggers",
price: 6000,
img: "./images/Carl.jpeg",
desc: `Carl leo hoodie comes in different sizes and colors.`,
},
{
id: 13,
title: "Male cargo shorts",
category: "shorts",
price: 6000,
img: "./images/cargo.jpeg",
desc: `Cargo shorts comes in different sizes and colors.`,
},

{
id: 14,
title: "Track pants ",
category: "joggers",
price: 6000,
img: "./images/pants.jpeg",
desc: `Track pants comes in different sizes and colors.`,
},
{
id: 15,
title: "Full kit track shirt and shorts",
category: "joggers",
price: 6000,
img: "./images/Track1.jpeg",
desc: `Full kit track shirt and shorts available in different colors and sizes.`,
},
{
id: 16,
title: "Multicolored Sweatshirt",
category: "joggers",
price: 6000,
img: "./images/Sweatshirt.jpeg",
desc: `Multi color sweatshirt available in different sizes.`,
},
{
id: 17,
title: "Unisex joggers",
category: "joggers",
price: 15000,
img: "./images/Unisex.jpeg",
desc: `Unisex full kit joggers available in different sizes and colors.`,
},
{
id: 18,
title: "Morty T shirt",
category: "shirt",
price: 5000,
img: "./images/Morty1.jpeg",
desc: `Morty t shirt Black 100% cotton comes in different colors and sizes.`,
},
{
id: 19,
title: "Cowboy T shirt",
category: "shirt",
price: 5000,
img: "./images/Cowboy.jpeg",
desc: `Black cowboy t shirt 100% cotton comes in different colors and sizes.`,
},

{
id: 20,
title: "Patterned Black n white hoodie",
category: "joggers",
price: 6000,
img: "./images/Blackwhitehoodie.jpeg",
desc: `Patterned Black n white hoodie available in different sizes and colors..`,
},
{
id: 21,
title: "Carleo white black t shirt",
category: "special",
price: 5000,
img: "./images/Carleowhiteblacktshirt.jpeg",
desc: `Carleo standing out stripe t shirt 100% cotton.`,
},
{
id: 22,
title: "Patterned yellow n white Hoodie",
category: "joggers",
price: 5000,
img: "./images/yellownwhitehoodie.jpeg",
desc: `Patterned yellow n white Hoodie available in different sizes and colors.`,
},

{
id: 24,
title: "Buckets t shirt",
category: "special",
price: 4000,
img: "./images/Bucketstshirt.jpeg",
desc: `Buck3ts shirt 100% cotton comes in different sizes and colors.`,
},
{
id: 25,
title: "Leo shirt",
category: "shirt",
price: 6000,
img: "./images/Leoshirt.jpeg",
desc: `Leo shirt fresh off the boat.`,
},
{
id: 26,
title: "Girl Tongue shirt",
category: "shirt",
price: 5000,
img: "./images/girltongue.jpeg",
desc: `Black t shirt 100% cotton comes in different colors and sizes.`,
},
{
id: 27,
title: "Men Quality shirt",
category: "shirt",
price: 5000,
img: "./images/menquailty.jpeg",
desc: `Black t shirt 100% cotton comes in different colors and sizes.`,
},
{
id: 28,
title: "Money Heist shirt",
category: "shirt",
price: 5000,
img: "./images/moneyheist.jpeg",
desc: `Black t shirt 100% cotton comes in different colors and sizes.`,
},
{
id: 29,
title: "painting shirt",
category: "shirt",
price: 5000,
img: "./images/painting.jpeg",
desc: `White t shirt 100% cotton comes in different colors and sizes.`,
},
{
id: 30,
title: "doll shirt",
category: "shirt",
price: 5000,
img: "./images/dollshirt.jpeg",
desc: `White t shirt 100% cotton comes in different colors and sizes.`,
},
{
id: 31,
title: "galdiator shirt",
category: "shirt",
price: 5000,
img: "./images/galdiator.jpeg",
desc: `Black t shirt 100% cotton comes in different colors and sizes.`,
},
{
id: 32,
title: "White black stripes shirt",
category: "special",
price: 5000,
img: "./images/Whiteblackstripestshirt.jpeg",
desc: `skateboard fam synth authentic semiotics. Live-edge lyft af, edison bulb yuccie crucifix microdosing.`,
},
{
id: 33,
title: "Carl leo striped hoodie",
category: "special",
price: 6000,
img: "./images/Blackhoodie6k.jpeg",
desc: `Carl leo striped hoodie comes in different sizes and colors.`,
},
{
id: 34,
title: "Broke shirt",
category: "shirt",
price: 5000,
img: "./images/Brokeshirt.jpeg",
desc: `White t shirt 100% cotton comes in different colors and sizes.`,
},
];
//White black stripes t shirt 5k
// i selected items from the boy html using document.querySelector
let sectionCenter = document.querySelector(".section-center");
let container = document.querySelector(".container");
// i cant explain this one here i will explain on whatapp
window.addEventListener("DOMContentLoaded", function () {
displayMenuItems(menu);
displayMenuCategory();
saveInStorage(menu);
});
/// this is where loop through menu array. displayMenuItems(items) items is just a parameter
function displayMenuItems(items) {
let displayMenu = items.map(function (item) {
return ` <div class="menu-items">
  <img src=${item.img}>
  <div class="words">
    <header>
      <h5> ${item.title} </h5>
      <h5>${item.price}naira </h5>
    </header>
    ${item.desc}
    <p><a href='page2.php?product=${item.title}'><button type='submit' data-id='${item.id}' class="btn">enter</button></a></p>
  </div>
</div> `;
});
displayMenu = displayMenu.join("");
sectionCenter.innerHTML = displayMenu;
/// then i add to item i selected from the boy.html page through innerHtml.<a href='page2.php?product=${item.title}'> this how i passed the data
  }
  /// this ones we have to talk using VN on WhatApp so that i can explain it welll
  function displayMenuCategory() {
  let menuCategory = menu.reduce(
  function (values, figure) {
  if (!values.includes(figure.category)) {
  values.push(figure.category);
  }

  return values;
  },
  ["all"]
  );
  let menuCategories = menuCategory.map(function (Categories) {
  return ` <button type="button" class="filter-btn" data-id=${Categories}>${Categories}</button>`;
  });
  menuCategories = menuCategories.join("");
  container.innerHTML = menuCategories;
  let filterBtn = container.querySelectorAll(".filter-btn");

  filterBtn.forEach(function (btn) {
  btn.addEventListener("click", function (e) {
  let district = e.currentTarget.dataset.id;
  let menuCategory = menu.filter(function (ones) {
  if (ones.category === district) {
  return ones;
  }
  });
  if (district === "all") {
  displayMenuItems(menu);
  } else {
  displayMenuItems(menuCategory);
  }
  });
  });
  }

  function saveInStorage(menu) {
  localStorage.setItem("good", JSON.stringify(menu));
  }

  function getLocal(id) {
  let item = JSON.parse(localStorage.getItem("good"));
  return item.find((one) => one.id !== id);
  }

  function saveCart(cart) {
  localStorage.setItem("cart", JSON.stringify(cart));
  }