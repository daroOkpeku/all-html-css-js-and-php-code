<?php



include("DB.php");
$name = $_SESSION['name'];

$sql = "SELECT * FROM more WHERE name='$name'";
$query = mysqli_query($conn, $sql);
$look = mysqli_fetch_array($query);

$city = $look['City'];
$country = $look['Country'];
$Interest = $look['Interest'];
$Primary = $look['PrimarySchool'];
$Secondary = $look['SecondarySchool'];
$University = $look['University'];
$skill = $look['Skill'];
