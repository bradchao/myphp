<?php
    $fp = fopen('test1.txt', 'w');
    fwrite($fp, "Hello, World");
    fclose($fp);
?>