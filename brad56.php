<?php
    $mysqli = new mysqli('127.0.0.1','root','root','class', 3306);
    $mysqli->set_charset("utf8");

    $sql = "UPDATE students SET ch =?, eng=?, math=? WHERE cID = ?";
    $stmt = $mysqli->prepare($sql);
    //$stmt = mysqli_prepare($mysqli, $sql);

    $updateId = 10;
    $ch = rand(50,80);
    $eng = rand(50,80);
    $math = rand(50,80);
    $stmt->bind_param('iiii', $ch,$eng,$math,$updateId );
    $stmt->execute();

    echo $mysqli->errno . '<br />';
    echo $mysqli->error . '<br />';

?>
