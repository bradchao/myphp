<?php
    $id = 'Z123456789';
    // 1. 長度為 10
    // 2. 第一碼為 A-Z
    // 3. 第二碼 1, 2
    // 4. 第三碼以後全為數字
    if (strlen($id) == 10){
        // substr($id, 0, 1) ==> 第一碼
        if (strpos('ABCDEFGHIJKLMNOPQRSTUVWXYZ', 
            substr($id, 0, 1)) !== false){
            
        }else{
            echo 'X2';
        }
    }else{
        echo 'X1';
    }



?>