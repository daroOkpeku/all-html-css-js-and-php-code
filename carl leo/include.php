<?php
$conn = mysqli_connect('localhost', 'root', '', 'chat');
if (mysqli_errno($conn)) {
    echo "failed to connect to DB" . mysqli_errno($conn);
    mysqli_close($conn);
}

if (isset($_REQUEST['product'])) {
    $one = $_REQUEST['product'];

    $sql = "SELECT * FROM product WHERE name='$one'";
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        $fetch = mysqli_fetch_array($query);
        $name = $fetch['name'];
        $imageOne =  $fetch['imageone'];
        $imageTwo = $fetch['imagetwo'];
        $imageThree  = $fetch['imagethree'];
        $price = $fetch['price'];
        $desc = $fetch['description'];
        $gender = $fetch['gender'];
    } else {
        header("location:index.php?enter the correct way");
    }
}
