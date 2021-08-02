<?php
    $fp = @opendir('/Applications/MAMP/htdocs/myphp') or exit('Server Busy v2');
    if ($fp){
        while ($row = readdir($fp)){
            echo $row . '<br />';
        }
    }else{
        echo 'XX';
    }
    closedir($fp);


?>