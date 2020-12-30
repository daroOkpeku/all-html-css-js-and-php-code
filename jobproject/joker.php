<?php

include("DB.php"); 
if (isset($_POST['enter'])) {
    session_start();

    $name = $_POST['name'];

    $pass = $_POST['pass'];





    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
    $name = mysqli_real_escape_string($conn, $name);
    $pass = mysqli_real_escape_string($conn, $pass);
    $name = preg_replace("/[^A-Za-z0-9]/", "", $name);
    $userPass = preg_replace("/[^A-Za-z0-9]/", "", $pass);
    $_SESSION['name'] = $name;
    $_SESSION['pass'] = $pass;
    $sql = "SELECT * FROM  member WHERE name='$name' AND pass='$pass'";
    $query = mysqli_query($conn, $sql);
    $check = mysqli_num_rows($query);
    if ($check > 0) {

        $sql_update = "UPDATE  member SET activity='online' WHERE name='$name'";
        $query_current = mysqli_query($conn, $sql_update);




        $sql_one = "SELECT * FROM  member WHERE name='$name'";
        $query_up = mysqli_query($conn, $sql_one);
        $single = mysqli_fetch_array($query_up);
        $user_data = $single['name'];
        header("location:profile.php?name=welcome'$user_data'");
    } else {
        header("location:index.php?please sign-up before your sign-in");
        echo "<script>window.open('index.php','_self')</script>";
    }
}
