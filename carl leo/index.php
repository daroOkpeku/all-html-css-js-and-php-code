<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>carl leo clothing</title>
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

  <!-- stylesheet -->
  <link rel="stylesheet" href="styles2.css?v=<?php echo time(); ?>" />
  <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>

<body>
  <nav class="nav">
    <div class="nav-center">
      <div class="nav-header">
        <h2>Carl leo</h2>
        <button type="button" class="toggle-btn" id="toggle-btn">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <ul class="nav-links">
        <li>
          <button class="link-btn">products</button>
        </li>
        <li>
          <button class="link-btn">developers</button>
        </li>
        <li>
          <button class="link-btn">company</button>
        </li>
      </ul>
      <button class="btn signin-btn">sign in</button>
    </div>
  </nav>
  <section class="hero">
    <div class="hero-center">
      <article class="hero-info">
        <h1 class="leo">Carl Leo Clothing</h1>
        <p>
          Carl leo clothing " giving you exclusive urban wears portrayed in classic
          styles ranging from
          unisex, male, female kids sport jerseys etc...
          We are at your service😁
        </p>
      </article>
      <article class="hero-images">
        <img src="./images2/phone.svg" class="phone-img" alt="phone" />
      </article>
    </div>
  </section>

  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <aside class="sidebar">
      <button class="close-btn" id="close-btn">
        X
      </button>
      <div class="sidebar-link">
        <article>
          <h4>products</h4>
          <div class="sidebar-sublinks">
            <a href="boy.php">
              <i class="fa fa-male"></i>
              Male Clothing
            </a>
            <a href="girls.php">
              <i class="fa fa-female"></i>
              Female Clothing
            </a>
          </div>
        </article>

        <article>
          <h4>developer</h4>
          <div class="sidebar-links">
            <a href="#">
              <i class="fas fa book"></i>
              Daro Okpeku
            </a>
            <a href="#">
              <i class="fas fa book"></i>
              Gino Woko
            </a>
            <a href="#">
              <i class="fas fa book"></i>
              Obira
            </a>
          </div>
        </article>


        <article>
          <h4>Company</h4>
          <div class="sidebar-links">
            <a href="product.html">
              <i class="fas fa briefcase"></i>
              About
            </a>


            <a href="sign in.php">
              <i class="fas fa briefcase"></i>
              sign in
            </a>
          </div>
        </article>
      </div>
    </aside>
  </div>
  <aside class="submenu"></aside>
  <script type="module" src="app.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#toggle-btn").click(function() {
        $("#sidebar-wrapper").addClass("show")

      })
    })
    $(document).ready(function() {
      $("#close-btn").click(function() {
        $("#sidebar-wrapper").removeClass("show")

      })
    })
  </script>
</body>

</html>