const sublinks = [
  {
    page: "products",
    links: [
      {
        label: "male Clothing",
        icon: "fa fa-male",
        url: "boy.php",
      },
      {
        label: "female Clothing",
        icon: "fa fa-female",
        url: "girls.php",
      },
    ],
  },
  {
    page: "developers",
    links: [
      { label: "Daro Okpeku", icon: "fas fa-book", url: "#" },
      { label: "Gino Woko", icon: "fas fa-book", url: "#" },
      { label: "Obira", icon: "fas fa-book", url: "#" },
    ],
  },
  {
    page: "company",
    links: [
      { label: "about", icon: "fas fa-briefcase", url: "products.html" },
      { label: "customers", icon: "fas fa-briefcase", url: "products.html" },
      { label: "sign in", icon: "fas fa-briefcase", url: "sign in.php" },
    ],
  },
];

let open = document.querySelector(".toggle-btn");
let close = document.querySelector(".close-btn");
let sidebarWRapper = document.querySelector(".sidebar-wrapper");
let linkBtn = [...document.querySelectorAll(".link-btn")];
let sidebar = document.querySelector(".sidebar-link");
let submenu = document.querySelector(".submenu");
let hero = document.querySelector(".hero");
let nav = document.querySelector(".nav");

open.addEventListener("click", () => {
  sidebarWRapper.classList.add("show");
});

close.addEventListener("click", () => {
  sidebarWRapper.classList.remove("show");
});

sidebar.innerHTML = sublinks
  .map(function (item) {
    let { links, page } = item;
    return `<article>
    <h4>${page}</h4>

    <div class="sidebar-sublinks">
    ${links
      .map((link) => {
        return `<a href='${link.url}'>
        <i class=${link.icon}></i>${link.label}
        </a>`;
      })
      .join("")}
    </div>
    </article>`;
  })
  .join("");

linkBtn.forEach(function (btn) {
  btn.addEventListener("mouseover", function (e) {
    let itemWord = e.currentTarget.textContent;
    let location = e.currentTarget.getBoundingClientRect();
    let center = (location.right + location.left) / 2;
    let bottom = location.bottom - 3;
    let tempMatch = sublinks.find(({ page }) => page === itemWord);
    if (tempMatch) {
      let { page, links } = tempMatch;
      submenu.style.left = `${center}px`;
      submenu.style.top = `${bottom}px`;
      submenu.classList.add("show");

      let column = "col-2";
      if (links.length === 3) {
        column = "col-3";
      }
      if (links.length > 3) {
        column = "col-4";
      }

      submenu.innerHTML = `
      <article>
      <h4>${page}<h4>
      <div class="sidebar-sublinks   ${column}" >
    ${links
      .map((link) => {
        return `<a href='${link.url}'>
        <i class=${link.icon}></i>${link.label}
        </a>`;
      })
      .join("")}
      </aside>
      </article>
      `;
    }
  });
});

hero.addEventListener("mouseover", function (e) {
  submenu.classList.remove("show");
});

nav.addEventListener("mouseover", function (e) {
  if (!e.target.classList.contain("link-btn")) {
    submenu.classList.remove("show");
  }
});
