<?php
    $mysqli = new mysqli('127.0.0.1','root','root','class', 3306);
    $mysqli->set_charset("utf8");

    $sql = "INSERT INTO students (cName,cSex,cBirthday,ch,eng,math) VALUES (?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($sql);
    //$stmt = mysqli_prepare($mysqli, $sql);

    $var1 = '資策會v3';
    $var2 = 'F';
    $var3 = '1999-01-02';
    $var4 = rand(0,100);
    $var5 = rand(0,100);
    $var6 = rand(0,100);
    $stmt->bind_param('sssiii', $var1,$var2,$var3,$var4,$var5,$var6);
    $stmt->execute();

    echo $mysqli->errno . '<br />';
    echo $mysqli->error . '<br />';

?>