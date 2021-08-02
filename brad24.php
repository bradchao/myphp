<?php

    foreach( $_SERVER as $key => $value){
        if (gettype($value) == 'array'){
            echo "{$key} => ";
            foreach($value as $kk => $vv){
                echo "{$kk} : {$vv}<br />";
            }
            echo "===<br />";
        }else{
            echo "{$key} : {$value}<br />";
        }
    }


?>