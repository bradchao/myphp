<?php
    $a[0] = 11;
    $a[1] = array(111,222,333);
    $a[2] = 33;

    foreach($a as $k => $v){
        echo $k . ':';
        if (gettype($v) == 'array'){
            foreach($v as $kk => $vv){
                echo $vv . ' '; 
            }
            echo '<br />';
        }else{
            echo $v . '<br />';
        }
    }




?>
















