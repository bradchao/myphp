<?php
    $poker = range(0,51);
    shuffle($poker);

    foreach($poker as $v){
        echo $v . '<br />';
    }
    echo "---<br />"
?>