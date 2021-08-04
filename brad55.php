<?php
    $mysqli = new mysqli('127.0.0.1','root','root','class', 3306);
    $mysqli->set_charset("utf8");

    $sql = "DELETE FROM students WHERE cID > ?";
    $stmt = $mysqli->prepare($sql);
    //$stmt = mysqli_prepare($mysqli, $sql);

    $delId = 10;
    $stmt->bind_param('i', $delId);
    $stmt->execute();

    echo $mysqli->errno . '<br />';
    echo $mysqli->error . '<br />';

?>