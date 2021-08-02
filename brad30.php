<?php
    $id = 'A123456789';
    $regex = '/^[A-Z][12][0-9]{8}$/';
    if (preg_match($regex, $id)){
        echo 'OK';
    }else{
        echo 'XX';
    }
    // 1. 0912-123456
    // 2. 04-22345678
    // 3. 049-1234567
    // 4. email
    // 5. password => number, letters, 特殊符號, 8

?>