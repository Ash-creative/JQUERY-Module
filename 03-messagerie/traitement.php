<?php
    $login = $_POST["login"];
    $msg = $_POST["msg"];
    echo "<p>$login a écrit le ".date("d-m-Y G:i:s")."</p>";
    echo "<p><i>$msg</i></p>";