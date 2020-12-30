<?php
include("DB.php");

$name = '';
$Address = '';
$phoneNumber = '';
$email = '';
$pass = '';
$error = '';



function clean($string)
{
    $string = trim($string);
    $string = stripcslashes($string);
    $string = htmlspecialchars($string);
    $string = strip_tags($string);
    return $string;
}
if (isset($_POST['enter'])) {
    if (empty($_POST['name'])) {
        $error .= '<p class="smile"> please enter your name </p>';
    } else {
        $name = clean($_POST['name']);
        if (!preg_match('/^[A-Za-z]*$/', $name)) {
            $error .= " please enter the correct text";
        }
    }

    if (empty($_POST['Address'])) {
        $error .= '<p class="smile"> please enter your address</p>';
    } else {
        $Address = clean($_POST['Address']);
        if (!preg_match('/^[A-Za-z0-9]*$/', $Address)) {
            $error .=  'please enter the correct text';
        }
    }

    if (empty($_POST['phoneNumber'])) {
        $error .= '<p class="smile"> please enter your phoneNumber</p>';
    } else {
        $phoneNumber = clean($_POST['phoneNumber']);
        if (!preg_match('/^[0-9]*$/', $phoneNumber)) {
            $error .= 'please enter the correct phoneNumber';
        }
    }

    if (empty($_POST['pass'])) {
        $error .= '<p class="smile"> please enter your phoneNumber</p>';
    } else {
        $pass = clean($_POST['pass']);
        if (!preg_match('/^[A-Za-z0-9]*$/', $pass)) {
            $error .= 'please enter the correct password';
        }
    }



    if (empty($_POST['email'])) {
        $error .= "<p class='smile'> please enter your email</p>";
    } else {
        $email = clean($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error .= "<p class='smile'> please enter your email correctly</p>";
        }
    }





    $pix  = $_FILES['pix'];
    $pix_name = $_FILES['pix']['name'];
    $temp = $_FILES['pix']['tmp_name'];
    $destination = "inside/" . $pix_name;

    $pixext = explode('.', $pix_name);
    $pixActual = strtolower(end($pixext));
    $allow = array('jpg', 'jpeg', 'png');
    if (in_array($pixActual, $allow)) {
        move_uploaded_file($temp, $destination);
        header("location:signIn.php?signIn page type in your fullName and password");
    } else {
        header("location:#index.php?the type of file is not allowed only pictures");
        $error .= "this type of file is not allowed";
    }



    $name = mysqli_real_escape_string($conn, $name);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $Address = mysqli_real_escape_string($conn, $Address);
    $Address = filter_var($_POST['Address'], FILTER_SANITIZE_STRING);
    $email = mysqli_real_escape_string($conn, $email);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phoneNumber = mysqli_real_escape_string($conn, $phoneNumber);
    $phoneNumber = filter_var($_POST['phoneNumber'], FILTER_SANITIZE_STRING);
    $pass = mysqli_real_escape_string($conn, $pass);
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
    $name = preg_replace("/[^A-Za-z0-9]/", "", $name);
    $Address = preg_replace("/[^A-Za-z0-9]/", "", $Address);
    $phoneNumber = preg_replace("/[^A-Za-z0-9]/", "", $phoneNumber);
    $pass = preg_replace("/[^A-Za-z0-9]/", "", $pass);




    $sql = "insert into  member(name, Address, email,  phoneNumber, pass, pix)  values('$name', '$Address', '$email', '$phoneNumber', '$pass', '$destination')";

    if (!mysqli_query($conn, $sql)) {
        printf("d% conn to sql", mysqli_affected_rows($conn));
        mysqli_close($conn);
    }

    $to = "stephenjason41@gmail.com";
    $subject = "website orders";
    $headers = "From:<website@Oci.com>";
    $name = $_POST['name'];
    $Address = $_POST['Address'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $body = "Name of consumer>" . $_POST['name'] . "   The location>" . $_POST['Address'] . " The consumer mail>" . $_POST['email'] . " The name of phoneNumber>" . $_POST['phoneNumber'] . "The product>3awater Dispenser Water Bottle " . "\n\n";
    mail($to, $subject, $headers, $body);


    $to = $_POST['email'];
    $subject = "you order our dispenser";
    $headers = "From:<website@daroChat.com>";
    $body = "This is your name " . $_POST['email'] . "  your password" . $_POST['pass'] . "  ";
    mail($to, $subject, $headers, $body);
}
