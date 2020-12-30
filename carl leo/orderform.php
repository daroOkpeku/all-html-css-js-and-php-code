<?php

$conn = mysqli_connect('sql110.epizy.com', 'epiz_26675185', 'd6FFhBNrgtADH', 'epiz_26675185_carlleo');
if (mysqli_errno($conn)) {
    echo "failed to conn to DB", mysqli_errno($conn);
    mysqli_close($conn);
}
if (isset($_REQUEST['item'])) {
    $mine = $_REQUEST['item'];
    $sql = "SELECT * FROM product WHERE name='$mine' ";
    $query = mysqli_query($conn, $sql);
    $fetch = mysqli_fetch_array($query);
    $name = $fetch['name'];
    $price = $fetch['price'];
    $gender = $fetch['gender'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>form</title>
    <link rel="stylesheet" href="order.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="side">
        <h3><span>product name:<br><?php echo $name; ?></span></h3>
        <h3><span>Colors: <br>Red, Yellow,<br> Black, White and Brown etc.</span></h3>
        <h3><span>size:L, XL, XXL</span></h3>
        <h3><span>price:<?php echo $price; ?></span></h3>
        <h3><span>gender:<?php echo $gender; ?></span></h3>
    </div>
    <div class="all">
        <form>
            <h4>enter your details to <br />purchase the product</h4>
            <div class="form">
                <label class="content">
                    <span class="name">Name</span>
                </label>
                <input type="text" name="name" placeholder="enter your full name" autocomplete="off" required />
            </div>

            <div class="form">
                <label class="content">
                    <span class="name">Address</span>
                </label>
                <input type="text" name="name" placeholder="enter your Address" autocomplete="off" required />
            </div>

            <div class="form">
                <label class="content">
                    <span class="name">Email</span>
                </label>
                <input type="text" name="name" placeholder="enter your email address" autocomplete="off" required />
            </div>



            <div class="form">
                <label class="content">
                    <span class="name">Color</span>
                </label>
                <input type="text" name="name" placeholder="enter color of the product " autocomplete="off" required />
            </div>

            <div class="form">
                <label class="content">
                    <span class="name">Size</span>
                </label>
                <input type="text" name="name" placeholder="enter the size of the product" autocomplete="off" required />
            </div>
            <button type="button" class="click">enter</button>
        </form>
    </div>
</body>

</html>