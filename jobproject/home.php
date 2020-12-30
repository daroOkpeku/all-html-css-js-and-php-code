<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION["name"])) {
    header("location:profile.php");
}

$name = $_SESSION['name'];
include("display.php");
include("insert.php");
?>
<html>

<head>
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
    <script src="jquery-3.5.1.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="all">
        <nav>
            upload view and chat

            <a href="chat.php"><i class="fa fa-comment" aria-hidden="true"></i>chat</a>
        </nav>
        <div class="list">
            <div class="text">
                <p class="ff"></p>

                <aside class="fog">
                    <!---from here to chat with loop-->


                </aside>
            </div>

            <!---from here to chat with loop end-->

        </div>

    </div>

    <article class="message">
        <div class="inside">
            <div class="post">
                <form method="POST" enctype="multipart/form-data">
                    <aside class="image-container">
                        <img src=<?php echo $_SESSION['pix'] = $pix; ?>>
                        <p><?php echo $name ?></p>

                    </aside>
                    <!----this is the place for posting picture-->
                    <div class="items">
                        <textarea name="go" rows="4" cols="28" placeholder="what is on your mind" class="what"></textarea>
                        <button type="submit" name="submit">post</button>
                    </div>
                    <div class="those">
                        <label class="like" for="file"><i class="fa fa-file-image-o" aria-hidden="true"></i><span id="img"> select pic</span></label><input type="file" name="pic" id="file" /><input type="Hidden" name="MAX_FILE_SIZE" value="30720" />

                    </div>
                </form>
            </div>
            <div class="land " id="land">
                <!----it is from here while loop --->
                <!--   <article class="info">
                        <div class="second">
                            <img src=<?php echo $pix ?>>
                            <p>name</p>

                        </div>

                        <aside class="rat">

                            <img src=<?php echo $pix ?>>


                        </aside>
                        <div class="container">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate et,
                            animi adipisci quis totam excepturi
                            reprehenderit dolore molestiae dolores sint corporis? Distinctio,
                            officia animi numquam perferendis facilis perspiciatis possimus recusandae.
                        </div>

                    </article>-->

                <!----to here --->



                <?php include("show.php"); ?>


            </div>

        </div>

    </article>
    </div>
    <div class="overall" id="overall">
        <article class="pop" id="pop">
            <div class="top">
                <div class="mini">
                    <img src=<?php echo $_SESSION['pix'] = $pix; ?> />
                    <aside>
                        <p>name</p>
                        <p>online</p>


                    </aside>
                    <button class="close" id="close">X</button>

                </div>

            </div>
            <div class="min-text">
                <article class="min-in">
                    <ul id="run">

                    </ul>

                </article>

            </div>
            <div class="input">
                <form method="POST">
                    <input type="text" name="send">
                    <button type="button" name="come">enter</button>
                </form>
            </div>
        </article>
    </div>
</body>
<script>
    $(document).ready(function() {
        $("#file").on("change", function(e) {


            var filename = e.target.value.split('\\').pop();
            $("#img").text(filename)




        })


        setInterval(function(e) {

            $("#land").load(" #land");

            $("#land").click(function(e) {

                e.preventDefault();

            })

        }, 1000);


    })
    $(document).ready(function() {
        $("#file").click(function() {
            $("#form-two").addClass("show")
        })

    })



    $(document).ready(function() {
        $("#name").click(function(e) {
            e.preventDefault();
            $("#overall").addClass("show")

        })
    })
    $(document).ready(function() {
        $("#close").click(function() {
            $("#overall").removeClass("show")

        })
    })
</script>

</html>