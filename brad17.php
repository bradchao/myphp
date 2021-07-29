<h1>Brad Big Company</h1>
<hr />
Hello, World
<?php
    $ary1 = array(1,2,3,4);
    echo $ary1[0] . '<hr />';
    //echo $ary1[4] . '<hr />';
    echo count($ary1) . '<hr />';

    $var2[7] = 123; // 7 => key; key-value
    echo gettype($var2) . '<hr />';
    var_dump($var2);
    echo '<hr />';

    for ($i = 0; $i < count($ary1); $i++){
        echo $ary1[$i] . '<br />';
    }
    echo '<hr />';

    $person['name'] = 'Brad';
    $person['age'] = 18;
    $person['gender'] = true;
    $person[1] = 123;
    foreach($person as $key => $value){
        echo "{$key} : {$value}<br />";
    }





?>