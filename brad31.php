<?php
    include "bradapis.php";
    include "apis/myapis.php";
    
    if (checkTWId('A123456789')){
        echo 'OK';
    }else{
        echo 'XX';
    }
    echo '<hr />';
    echo "1. " . createTWIdByRandom() . '<br />';
    echo "2. " . createTWIdByGender(true) . '<br />';
    echo "3. " . createTWIdByArea('Y') . '<br />';
    echo "4. " . createTWIdByBoth(false, 'C') . '<br />';
    echo "5. " . createTWIdByArea() . '<br />';
    echo "6. " . createTWIdByGender() . '<br />';


?>