<?php
    $passwd = '123456';
    
    // 編碼處理
    $passwd2 = password_hash($passwd, PASSWORD_DEFAULT);
    echo $passwd2;
    echo '<hr />';
    if (password_verify('1234567', $passwd2)){
        echo 'OK';
    }else{
        echo 'XX';
    }


?>