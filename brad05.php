<?php
    $var1 = 123;    // $[a-zA-Z][a-zA-Z0-9_]*
    // 弱型別程式語言PHP, JavaScript => 強型別 Java
    echo gettype($var1) . '<br />';
    $var1 = 12.3;
    echo gettype($var1) . '<br />';
    $var1 = 'Brad';
    echo gettype($var1) . '<br />';
    $var1 = false;
    echo gettype($var1) . '<br />';
    $var1 = new DateTime();
    echo gettype($var1) . '<br />';

?>