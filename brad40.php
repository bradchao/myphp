<?php
    $fp = fopen('test1.txt', 'a'); // r+ vs w => 不一樣
    fwrite($fp, "abc");
    fclose($fp);
?>