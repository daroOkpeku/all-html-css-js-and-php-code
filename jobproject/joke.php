  <?php

  if (isset($_REQUEST['send'])) {
    include("DB.php");

    $content = $_REQUEST['content'];
    $content = mysqli_real_escape_string($conn, $content);



    $insert = "INSERT INTO userchat (sender, receiver, content, msg_status, present) 
     VALUES('$user_name','$otherUser', '$content',  'unread', NOW())";

    $insert_run = mysqli_query($conn, $insert);
  }

  ?>