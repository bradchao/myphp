<?php
    $fp = @fopen("brad.txt", "r") or die("Server Busy");

    while ( $line = @fgets($fp)){
        echo "{$line}<br />";
    }

    fclose($fp);


?>