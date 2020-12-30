<?php

include("DB.php");
$name = $_SESSION['name'];


$sql = "SELECT * FROM member WHERE name='$name'";
$query = mysqli_query($conn, $sql);
$search = mysqli_fetch_array($query);
$pix = $search['pix'];
