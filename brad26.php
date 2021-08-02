<?php
    $a = 10;
    // 傳值/址
    function cha(){
        $a = 100;
        $b = 100;
    }

    cha();
    echo $a;

?>