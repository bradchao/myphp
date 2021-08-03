<?php
    $fp = @fopen("maskdata.csv", "r") or die("Server Busy");

    while ( $line = trim(@fgets($fp))){
        echo "{$line}<br />";
    }


    fclose($fp);


?>