<?php 
$name = '';
$place = '';
$phoneNumber = '';
$choice = '';
$problem = '';
$me = '';
$error = '';

function shoot($strings){
  $strings = trim($strings);
  $strings = stripslashes($strings);
  $strings = htmlspecialchars($strings);
  return $strings;
}
if(isset($_POST['enter'])){
 
  if(empty($_POST['name'])){
    $error .= "<p> enter your name </p>";
  }else{
    $name = shoot($_POST['name']);
    if(!preg_match("/^[a-zA-Z]*$/", $name)){
       $error .= "<p> enter the correct name </p>";
    }
  }
  if(empty($_POST['phoneNumber'])){
   $error .= "<p> enter your phone number</p>";
  }else{
    $phoneNumber = shoot($_POST['phoneNumber']);
    if(!preg_match("/^[0-9]*$/", $phoneNumber)){
       $error .= "<p> enter the correct name </p>";
    }
  }
  if(empty($_POST['problem'])){
   $error .= "<p> what are the issues your facing</p>";
  }else{
    $problem = shoot(strip_tags($_POST['problem']));
   
  }
  if(empty($_POST['place'])){
    $error .= "<p> enter your location </p>";
  }else{
    $place = shoot($_POST['place']);
    if(!preg_match("/^[a-zA-Z]*$/", $place)){
       $error .= "<p> enter the correct name </p>";
    }
  }
  if(empty($_POST['choice'])){
   "<p>which device is giving an issue</p>"; 
  }
  if(isset($_POST['me'])){
    $error .= "<p>select one of the goods</p>";
  } 

  $to = "stephenjason41@gmail.com";
  $subject = "website complaints";
  $headers = "From:<website@3awater.com>";
  $name = $_POST['name'];
  $place = $_POST['place'];
  $choice= $_POST['choice'];
  $phoneNumber = $_POST['phoneNumber'];
  $problem  =  $_POST['problem'];
  $body ="Name of consumer>".$_POST['name']."   The location>".$_POST['place']." The product problem>".$_POST['choice']." The customer phoneNumber>".$_POST['phoneNumber']."The customer problem> ".$_POST['problem']."\n\n";
  mail($to, $subject, $headers, $body);
  
  
  

}



?>



<!doctype html>
<html>
<meta charset="utf-8">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="jason2.css">
  <script  defer src="smart.js"></script>
  <script  defer src="fox.js"></script>
</head>

<body id="star">
<div class="preloader">
    <img src="preloader.gif" alt="preloader" class="preloader__item" />
  </div>
  <nav class="header">
    <i class="logo"><a href="#">3awater </a></i>

    <ul class="links">
      <li><a href="index.php" class="means">home</a></li>
      <li><a href="product.php" class="means">product/services</a></li>
      <li><a href="about.html" class="means">about us </a></li>
    </ul>


    <div class="burger">
      <div class="lineOne"></div>
      <div class="lineTwo"></div>
      <div class="lineThree"></div>
    </div>
  </nav>
  <br>
  
   <center>
  <div class="slider">
    <figure>
      <div class="slide">
        <p class="a">3awater</p>
        <img src="water1.jpg">
      </div>
      <div class="slide">
        <p class="a">3awater</p>
        <img src="water2.jpg">
      </div>
      <div class="slide">
        <p class="a">3awater</p>
        <img src="water3.jpg">
      </div>
      <div class="slide">
        <p class="a">3awater</p>
        <img src="step3.jpg">
      </div>
      <div class="slide">
        <p class="a">3awater</p>
        <img src="waterreflection.jpg">
      </div>
    </figure>
  </div>
  </center>
  


  <br><br><br><br><br>
  <br>
  
  <center>
  <div class="offer">
  <center>product/services</center>
    <div class="one">
    <img src="dispenser2.0.jpg" class="first-pic" id="first-pic">
  <a href="goods.php" class="glass"><center class="see">Linsan Water Dispenser with Freezer Lin-02LBA-Black</center></a>
  </div>
    <div>
    <img src="manualone.jpg" class="first-pic" id="first-pix">
    <a href="goodsthree.php" class="glass"><center class="see">Plastic Hand Manuel Water Pump Dispenser</center></a>
    </div>
    
    <div>
    <img src="tablewater%201.0.jpg" class="first-pic" id="second-pic">
      <a href="goodsfour.php" class="glass"><center class="see"> 3aWater Table Water</center></a>
    </div>
    
    <div>
    <img src="dispenser%20water%201.0.jpeg" class="first-pic"
    id="second-pix">
    <a href="goodstwo.php" class="glass"><center class="see">3aWater Dispenser water Bottle</center></a>  
    </div>
    </div>
  </center>
  
  
 
  
  
  <form method="post">
  <div class="form-section">
  
  <h1><center class="six" >complaints</center></h1>
   <center><?php echo $error; ?></center>
  <div class="form">
    <input type="text" name="name" autocomplete="off" placeholder="JohnDoe" required>
    <label for="name" class="label-name">
    <span class="content-name">Name</span>
    </label>
    </div>
    
    
    
    
    <div class="form">
    <input type="text" name="place" autocomplete="off" placeholder="14BadenmoseStrIkejaLagos" required>
    <label for="name" class="label-name">
    <span class="content-name">Address</span>
    </label>
    </div>
    
    
    
    
    
    
    <div class="form">
    <input type="text" name="phoneNumber" autocomplete="off" placeholder="08123457789" required>
    <label for="name" class="label-name">
    <span class="content-name">PhoneNumber</span>
    </label>
    </div>
    
    
    
    
    <select name="choice">
    <option name="me">choose</option>
    <option> dispenser</option>
    <option>dispenser water</option>
    <option>manual dispenser</option>
    
    </select>
    <br><br>
    
    
<textarea placeholder="write your issue" name="problem"></textarea>
    
    <br>
    
    <input type="submit" class="enter" id="enter" name="enter"/> 
    <button type="button" class="shoot"></button>
  </div>
  </form>
    <br><br><br><br><br><br>
  <div class="overall" id="overall">
  <div class="modal" id="modal">
  <div class="modal-content">
    <div class="top">3awater <button class="coal" id="coal">&times;</button></div>
    <center class="van">Thank you for filling the form we are very sorry for the issue. we will call you very soon to resolve the issue/issues
    </center>
    </div>
  </div> 
  
    
   </div> 
    
   
  <center> <div class="footer"> 
    
   <a href="#" class="teamone">home</a>
    <a href="#" class="teamone">product/services</a>
    <a href="#" class="teamone">about us</a>
    
   
     <i class="teamtwo"> <img src="instagram.png" class="pic">3aWater</i>  
    <i class="teamtwo"><img src="twitter.png" class="pic">3aWater</i>
    <i class="teamtwo"> <img src="facebook.png" class="pic">3aWater</i>
     <i class="daro"> developed by daro Okpeku</i>
   </div></center>
   <a href="#star"><button type="button" class="up"> &#10094;</button></a>
</body>

</html>
