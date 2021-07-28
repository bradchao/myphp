<?php
    // Loop => 小看 for
    $i = 0;
    for (test1() ; $i < 10 ; drawLine()){
        echo "{$i}<br />";
        $i++;
    }

    function test1(){
        echo 'Brad<br />';
    }
    function drawLine(){
        echo '<hr />';
    }

?>