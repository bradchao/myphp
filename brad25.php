<?php
    // function

    function sayYa(){
        echo "Ya<br />";
    }
    function sayHello($name){
        echo "Hello, {$name}<br />";
    }
    function sayHelloV2($times, $name){
        for ($i=0; $i<$times; $i++){
            echo "Hello, {$name}<br />";
        }
    }
    function sayHelloV3($times = 1, $name = 'World'){
        for ($i=0; $i<$times; $i++){
            echo "Hello, {$name}<br />";
        }
    }

    function sayHelloV4(){
        //echo func_num_args();  // 傳遞幾個參數資料
        //echo func_get_arg(2); 
        $args = func_get_args();   
        //var_dump($args);
        foreach($args as $name){
            echo "Hello, {$name}<br />";
        }
        
    }

    sayYa(); sayYa();
    sayHello('Brad'); sayHello('Tony');
    sayHelloV2(3, 'Brad');

    sayHelloV3(2, 'III');
    echo "---<br />";
    sayHelloV3(3);
    echo "---<br />";
    sayHelloV3();
    echo "---<br />";
    sayHelloV3(3);
    echo "---<br />";
    sayHelloV3('Mark');
    echo "---<br />";
    sayHelloV4('Brad','Eric','Amy');

?>