<?php
    // 模擬擲骰子100次 => 統計各點出現的次數
    $p = array(1 => 0,0,0,0,0,0); // $p[1] = 0 ~ $p[6] = 0
    for ($i = 0; $i < 1000000; $i++){
        $point = rand(1,9);
        
        //$p[ $point>6 ? $point-3 : $point ]++;

        if ($point > 6){
            $p[$point-3]++;
        }else{
            $p[$point]++;
        }
    }

    echo "<hr />";
    foreach($p as $key => $value){
        echo "{$key}點出現{$value}次<br />";
    }


?>