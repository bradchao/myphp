<?php
    $mysqli = new mysqli('127.0.0.1','root','root','class', 3306);
    $mysqli->set_charset("utf8");

    $result = $mysqli->query('SELECT * FROM students');

    while ($rows = $result->fetch_array()){
        echo "{$rows['cID']} : {$rows['cName']} : {$rows['ch']}<br />";
        //echo "{$rows[0]} : {$rows[1]} : {$rows[7]}<br />";
    }


?>