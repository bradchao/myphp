<?php
    $mysqli = new mysqli('127.0.0.1','root','root','class', 3306);
    $mysqli->set_charset("utf8");

    $sql = "SELECT cName,ch,eng,math FROM students WHERE cID < ?";
    $stmt = $mysqli->prepare($sql);
    $cID = 7;
    $stmt->bind_param('i', $cID );
    $stmt->execute();
    $stmt->store_result();

    echo $stmt->num_rows . '<br />';

    $stmt->bind_result($v1, $v2, $v3, $v4);
    while ($stmt->fetch()){
        echo "{$v1} : {$v2} : {$v3} : {$v4}<br />";
    }


?>