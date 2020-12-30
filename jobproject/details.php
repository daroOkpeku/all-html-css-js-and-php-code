   <?php
    include("DB.php");




    $sql_get = "SELECT * FROM member ";
    $query_get = mysqli_query($conn, $sql_get);
    while ($search_get = mysqli_fetch_array($query_get)) {


        $name = $search_get['name'];
        $person_s = $search_get['activity'];


        echo "
                        <div class='details' id='details'>
                            <h2  id='Btn'><a href='chat.php?user_data=$name' class='links' >$name</h2>
                            <p>$person_s</p>
                        </div>
                       
                              
                        ";
    }
    ?>