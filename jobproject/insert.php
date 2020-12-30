<?php
if (isset($_POST['submit'])) {
    include("DB.php");

    $name = $_SESSION['name'];
    $pix = $_SESSION['pix'];
    $commit = $_POST['go'];
    $commit = mysqli_real_escape_string($conn, $commit);
    $commit = filter_var($_POST['go'], FILTER_SANITIZE_STRING);
    $commit  = trim($commit);
    $commit  = stripcslashes($commit);
    $commit  = htmlspecialchars($commit);
    $commit = strip_tags($commit);

    $pix_name = $_FILES['pic']['name'];
    $temp = $_FILES['pic']['tmp_name'];
    $destination = "online/" . $pix_name;

    $pixext = explode('.', $pix_name);
    $pixActual = strtolower(end($pixext));
    $allow = array('jpg', 'jpeg', 'png');
    if (in_array($pixActual, $allow)) {
        move_uploaded_file($temp, $destination);
    }
    $sql = "insert into pic(name, imageone, imagetwo, word, now ) values('$name', '$destination', '$pix', '$commit', NOW() )";
    $query = mysqli_query($conn, $sql);
}
