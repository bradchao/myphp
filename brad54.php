<?php
    $mysqli = new mysqli('127.0.0.1','root','root','class', 3306);
    $mysqli->set_charset("utf8");

    $sql = "INSERT INTO students (cName,cSex,cBirthday) VALUES (?,?,?)";
    $stmt = $mysqli->prepare($sql);
    //$stmt = mysqli_prepare($mysqli, $sql);

    $cName = 'Brad';
    $cSex = 'M';
    $cBirthday = '1999-01-02';
    $stmt->bind_param('sss', $cName, $cSex, $cBirthday);
    if ($stmt->execute()){
        echo "OK";
    }else{
        echo "XX";
    }


?>