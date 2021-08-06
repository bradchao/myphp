<?php
    // 新增會員
    // $_REQUEST => $_GET / $_POST
    if (!isset($_POST['account'])) return;

    include('bradsql.php');
    $account = $_POST['account'];
    $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $sql = "INSERT INTO member (account,passwd,email) VALUES (?,?,?)";
    $stmt = $mysqli->prepare($sql);
    //$stmt = mysqli_prepare($mysqli, $sql);

    $stmt->bind_param('sss', $account,$passwd,$email);
    $stmt->execute();



?>


