<?php
    $mysqli = new mysqli('127.0.0.1','root','root','class', 3306);
    $mysqli->set_charset("utf8");

    $result = $mysqli->query('SELECT * FROM students');

    //$rows = $result->fetch_object();
    //$rows = $result->fetch_array();

    while ($rows = $result->fetch_object()){
        echo "{$rows->cID} : {$rows->cName}<br />";
    }


?>