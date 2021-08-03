<?php
    $fp = fopen('https://www.iii.org.tw/', 'r') or die();

    $i = 0;
    while ($line = @fgetss($fp)){
        echo $i++ . $line . '<br />';
    }

    fclose($fp);
?>