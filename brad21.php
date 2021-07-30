<?php
    $a[0] = 123;    // $a => array
    $a[1][0] = 10;  // $a => array array
    $a[1][2][3] = 'Brad'; 
    $a[2] = array(1,2,3,4,5);

    foreach($a as $k => $v){
        if (gettype($v) == 'array'){
            foreach($v as $kk => $vv){
                if (gettype($vv) == 'array'){
                    foreach ($vv as $kkk => $vvv){
                        echo $vvv;
                    }
                }else{
                    echo $vv;
                }
                echo '<br />';
            }
        }else{
            echo $v;
        }
        echo '<br />';
    }

?>