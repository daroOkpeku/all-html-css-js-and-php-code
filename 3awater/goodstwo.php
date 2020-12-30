
<!doctype html>
<html>
<meta charset="utf-8">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="goodstwo.css">
  <script defer src="smart.js" ></script>
  <script defer src="joke.js"></script>
</head>

<body id="star">
  <nav class="header">
    <i class="logo"><a href="#">3awater </a></i>

    <ul class="links">
      <li><a href="index.php" class="means">home</a></li>
      <li><a href="product.php" class="means">product/services</a></li>
      <li><a href="about.html" class="means">about us </a></li>
    </ul>


    <div class="burger">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </nav>
  
  <br><br><br>
  
  <div class="sliderCover">
    <button class="prevBtn">prev</button>
    <button class="nextBtn">next</button>
    <div class="slides">
      <img src="dispenserwater 1.1.jpg" width="500px" height="400px">
    </div>

    <div class="slides">
      <img src="dispenserwater1.2.jpg" width="500px" height="400px">
    </div>

    <div class="slides">
      <img src="dispenser water 1.0.jpeg" width="500px" height="400px">
    </div>
  </div>
  <br><br><br><br><br><br>
  <div class="talk">
  <i class="one"><h4>Product Name:</h4>3awater Dispenser Water Bottle</i>
  <br>
  <i class="one"><h4>Price:</h4>400 OR 350 Naira Per Bottle</i>
  <br>
  <i><h4>Description</h4><p>Cway water has proven to be among one of the cleanest and purest of waters for drinking over the years.</p> 
    <p>Free from contamination and sealed at delivery. The water is provided along with the bottle. </p>
    <p>No need to return bottles at point of delivery. Water content is 18.9 Liters.</p>
    </i>
    <br>
    <i><h4>Key feature</h4>
      <i class="one"><h4>color:</h4>Blue</i>
      <i class="one"><h4>Weight(kg):</h4> 11</i>
      <i class="one">3awater 18.9 Liters Water with Bottle</i>
      <i class="one">For all kinds of uses</i>
    
    </i>

    <br>
    
  </div>
  <a href="#star"><button type="button" class="up"> &#10094;</button></a>
  <br><br><br>
<center><button type="button" class="buyMe">BuyMe</button></center>

<div class="open-modal">
  

  <div class="modal">
  <div class="above"><h3>Please Fill the form to purchase the Product </h3><button class="close">X</button></div>
  
  <form method="post">
  <?php 
  
  $name = '';
  $place = '';
  $phoneNumber ='';
  $email = '';
  $product = 'Dispenser Water Bottle';
  $error = '';
  function clean($string){
    $string = trim($string);
    $string = stripcslashes($string);
    $string = htmlspecialchars($string);
    $string = strip_tags($string);
    return $string;
  }
  if(isset($_POST['enter'])){
 if(empty($_POST['name'])){
   $error .= '<p class="smile"> please enter your name </p>';
 }else{
  $name = clean($_POST['name']);
  if(!preg_match('/^[A-Za-z]*$/', $name)){
    $error .= " please enter the correct text"; 
  }
 }

  if(empty($_POST['place'])){
    $error .= '<p class="smile"> please enter your address</p>';
  }
  else{
    $place = clean($_POST['place']);
  if(!preg_match('/^[A-Za-z0-9]*$/', $place)){
    $error .=  'please enter the correct text'; 
  }
  }

  if(empty($_POST['phoneNumber'])){
    $error .= '<p class="smile"> please enter your phoneNumber</p>';
  }else{
    $phoneNumber = clean($_POST['phoneNumber']);
    if(!preg_match('/^[0-9]*$/', $phoneNumber)){
      $error .= 'please enter the correct phoneNumber'; 
    }
    }




  if(empty($_POST['email'])){
    $error .= "<p class='smile'> please enter your email</p>";
  }else{
  $email = clean($_POST['email']);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error .= "<p class='smile'> please enter your email correctly</p>";
  }
  }


  $conn = mysqli_connect("sql308.epizy.com", "epiz_26288363", "CVz1Uibi6N0", "epiz_26288363_stephen");
  if(mysqli_errno($conn)){
      echo "failed to connect to the database" .mysqli_errno($conn);
  }

  $name = mysqli_real_escape_string($conn, $name);
  $place = mysqli_real_escape_string($conn, $place);
  $email = mysqli_real_escape_string($conn, $email);
  $phoneNumber = mysqli_real_escape_string($conn, $phoneNumber);
  $product = mysqli_real_escape_string($conn, $product);
  $name = preg_replace("/[^A-Za-z0-9]/", "", $name);
  $place = preg_replace("/[^A-Za-z0-9]/", "", $place);
  $email = preg_replace("/[^A-Za-z0-9]/", "", $email);
  $phoneNumber = preg_replace("/[^A-Za-z0-9]/", "", $phoneNumber);
  $product = preg_replace("/[^A-Za-z0-9]/", "", $product);
 

  $sql = "insert into trial(name, place, email,  phoneNumber, product)  values('$name', '$place', '$email', '$phoneNumber', '$product')";

  if(!mysqli_query($conn, $sql)){
   printf("d% conn to sql", mysqli_affected_rows($conn));
   mysqli_close($conn);
  }

$to = "stephenjason41@gmail.com";
$subject = "website orders";
$headers = "From:<website@3awater.com>";
$name = $_POST['name'];
$place = $_POST['place'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$body ="Name of consumer>".$_POST['name']."   The location>".$_POST['place']." The consumer mail>".$_POST['email']." The name of phoneNumber>".$_POST['phoneNumber']."The product>3awater Dispenser Water Bottle "."\n\n";
mail($to, $subject, $headers, $body);


$to = $_POST['email'];
$subject = "you order our dispenser";
$headers = "From:<website@3awater.com>";
$body = "we will call you to confirm the order";
mail($to, $subject, $headers, $body);


 
  




 }
  



  ?>

    <div class="form-section">
    <div class="form">
      <input type="text" name="name" autocomplete="off" placeholder="JohnDoe" required>
      <label for="name" class="label-name">
      <span class="content-name">Name</span>
      </label>
      </div>
      
      
      
      
      <div class="form">
      <input type="text" name="place" autocomplete="off"  placeholder="14BadenmoseStrIkejaLagos" required>
      <label for="name" class="label-name">
      <span class="content-name">Address</span>
      </label>
      </div>
      
      
      
      
      
      
      <div class="form">
      <input type="text" name="PhoneNumber" autocomplete="off" placeholder="08123457789" required>
      <label for="name" class="label-name">
      <span class="content-name">PhoneNumber</span>
      </label>
      </div>
      
      
      
      
      <div class="form">
      <input type="text" name="email" autocomplete="off" placeholder="example@gamil.com" required>
      <label for="name" class="label-name">
      <span class="content-name">email</span>
      </label>
      </div>
     
      <br>
      
    <center><input type="submit" class="enter" id="enter" name="enter"/></center> 
    </div>
    
    </form>
    <br>
    <center><p><?php echo $error; ?></p></center>
  </div>



</div>




  <br><br><br><br><br><br><br><br><br><br>
 <center> <div class="footer"> 

   <a href="#" class="teamone">home</a>
    <a href="#" class="teamone">product/services</a>
    <a href="#" class="teamone">about us</a>
   
   
     <i class="teamtwo"> <img src="instagram.png" class="pic">3aWater</i>  
    <i class="teamtwo"><img src="twitter.png" class="pic">3aWater</i>
    <i class="teamtwo"> <img src="facebook.png" class="pic">3aWater</i>
     <i class="daro"> developed by daro okpeku</i>
     <p class="copy"> 3aWaterCompany&copy;Copyright<span class="date"></span></p>
   </div></center>
</body>

</html>
