<?php
    $ary1 = array(1,2,3,4);
    echo $ary1[0] . '<hr />';
    //echo $ary1[4] . '<hr />';
    echo count($ary1) . '<hr />';

    $var2[7] = 123;
    echo gettype($var2) . '<hr />';
    var_dump($var2);
    echo '<hr />';

    for ($i = 0; $i < count($ary1); $i++){
        echo $ary1[$i] . '<br />';
    }

?>