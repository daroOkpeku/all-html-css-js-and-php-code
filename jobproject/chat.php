<?php
include("DB.php");
session_start();
if (!isset($_SESSION["name"])) {
    header("location:profile.php");
} else {
?>
    <?php

    $name = $_SESSION['name'];

    $sql_about = "SELECT * FROM member WHERE name='$name'";
    $query_about = mysqli_query($conn, $sql_about);
    $select = mysqli_fetch_array($query_about);
    $user_name = $select['name'];
    $user_id = $select['id'];
    $user_log = $select['activity'];

    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
        <link rel="stylesheet" href="chat.css?v=<?php echo time(); ?>">
        <script src="jquery-3.5.1.min.js"></script>

    </head>

    <body>




        <div class="all">
            <div class="left">
                <div class="add">
                    <div class="act">

                        <button>add friends</button></div>
                    <span class="info">welcome:<?php echo $name;
                                                ?>
                        <p class="status"><?php echo $user_log;
                                            ?></p>
                    </span>

                </div>
                <div id="like">
                    <div class="in" id="in">

                        <?php include("details.php"); ?>

                    </div>
                </div>

            </div>

            <div class="side">

                <nav class="top">

                    <span class="vex" id="vex">
                        <?php include("loop.php");   ?>

                        <p><?php echo $otherUser; ?></p>
                        <p class="message"> <?php echo $total; ?>message</p>
                    </span>

                    <a href="log.php?name=<?php echo $name ?>"><button type="submit" class="logout" name="logout">logout</button></a>

                    <button type="button" class="drop" id="drop">
                        <i class="far fa-comment-alt">
                            <div id="fun"></div>
                        </i>
                    </button>
                    <div class="team">
                        <ul id="run">

                        </ul>

                </nav>



                <div class="text" id="text">

                    <ul class='list' id="list">
                        <li id="tall" class="tall">
                            <?php include("list.php"); ?>

                        </li>
                    </ul>


                </div>
                <div class="down">
                    <?php include("joke.php"); ?>
                    <form method="POST">
                        <input type="text" name="content" id="content" class="userInput" />
                        <button type="submit" class="send" id="send" name="send">send</button>
                    </form>
                </div>
            </div>

    </body>
    <script type="text/javascript">
        let tall = document.querySelector(".tall");
        $(document).ready(function() {

            $("#tall").load(" #tall")
            setInterval(function() {
                $("#tall").load(" #tall");
            }, 1000);


            $("#like").load(" #like")
            setInterval(function() {
                $("#like").load(" #like");
            }, 10000);



        });

        $(document).ready(function() {
            $("#content").click(function(e) {

                e.preventDefault();

            })
        })

        $(document).ready(function() {
            $("#text").click(function(e) {
                e.preventDefault();

            })
        })


        $(document).ready(function() {

            setInterval(function() {
                showing();
            }, 1000);


            function showing(option = '') {
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        option: option
                    },
                    dataType: "json",
                    success: function(data) {
                        $('#run').html(data.notification);
                        if (data.total > 0) {
                            $('#fun').html(data.total);
                        }

                    }
                })
            }

            showing();



            $(document).on("click", "#drop", function() {
                $('#fun').html("");
                showing('read');
            })


        })

        let btn = document.querySelector(".drop");
        let team = document.querySelector(".team");

        btn.addEventListener("click", function(e) {
            let item = e.preventDefault();
            team.classList.toggle("show");
        });
    </script>


    </html>
<?php } ?>