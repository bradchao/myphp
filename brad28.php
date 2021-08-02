<?php

    $mystr = 'abcdefg';
    $findme = 'a';
    if (strpos($mystr, $findme) !== false){
        echo "find: " . strpos($mystr, $findme);
    }else{
        echo "not found";
    }

    echo '----------<br />';
    $test1 = false;
    echo $test1 === 0;
    // 全等 ===, !== 全不等
    // 型別是否相等
    // 相等下, 再去比較其值是否相等
    // -----------------
    // 相等 == 只有比較其值是否相等
    // 不等 != 



?>