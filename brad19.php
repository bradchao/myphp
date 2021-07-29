<?php
    // 模擬擲骰子100次 => 統計各點出現的次數
    $p = array(1 => 0,0,0,0,0,0); // $p[1] = 0 ~ $p[6] = 0
    for ($i = 0; $i < 100; $i++){
        $point = rand(1,6);
        $p[$point]++;
    }

    foreach($p as $point => $times){
        echo "{$point}點出現{$times}次<br />";
    }

?>