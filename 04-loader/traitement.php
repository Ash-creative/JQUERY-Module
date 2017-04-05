<?php
// Utilisation de sleep pour avoir le temps de voir le loader
sleep(2);
    if (isset($_GET['param1'])) {
        echo "<p>Param 1 = " . $_GET['param1']. "<br>" .
            "Param 2 = " . $_GET['param2']."</p>";
    }

    if (isset($_POST['post_param1'])) {
        echo "<p>PostParam 1 = " . $_POST['post_param1']. "<br>" .
         "PostParam 2 = " . $_POST['post_param2']."</p>";
    }
?>