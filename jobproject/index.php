<!DOCTYPE html>
<?php include("first.php") ?>

<head>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>" />
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <div class="all">
            <h4> Sign Up </h4>
            <div class="form">
                <label class="content">
                    <span class="name">FullName</span>
                </label>
                <input type="text" name="name" placeholder="enter your full name" autocomplete="off" required />
            </div>

            <div class="form">
                <label class="content">
                    <span class="name">Address</span>
                </label>
                <input type="text" name="Address" placeholder="enter your Address" autocomplete="off" required />
            </div>

            <div class="form">
                <label class="content">
                    <span class="name">Email</span>
                </label>
                <input type="text" name="email" placeholder="enter your email address" autocomplete="off" required />
            </div>

            <div class="form">
                <label class="content">
                    <span class="name">phoneNumber</span>
                </label>
                <input type="number" class="no-arrow" name="phoneNumber" placeholder="enter the  phone number" autocomplete="off" required />
            </div>

            <div class="form">
                <label class="content">
                    <span class="name">password</span>
                </label>
                <input type="password" name="pass" placeholder="enter your password" autocomplete="off" required />
            </div>


            <input type="file" name="pix" />

            <input type="Hidden" name="MAX_FILE_SIZE" value="30720" />

            <button type="submit" name="enter" class="click">enter</button>
        </div>
    </form>

    <div class="center"><?php echo $error ?></div>
    <Center>
        <p class="last">please click here if you have an existing account</p><a href="signIn.php" class="aim">SignIn</a>
    </Center>
</body>

</html>