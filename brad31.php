<?php
    include "bradapis.php";
    include "apis/myapis.php";
    
    if (checkTWId('A123456789')){
        echo 'OK';
    }else{
        echo 'XX';
    }

    echo fxy(2,3);


?>