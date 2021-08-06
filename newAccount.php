<?php
    // 新增會員
    // $_REQUEST => $_GET / $_POST
    if (!isset($_POST['account'])) return;

    include('bradsql.php');
    $account = $_POST['account'];
    $passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];

    $like = $_POST['like']; // array
    $habby = '';
    foreach($like as $v) $habby .= $v;
    //echo "{$birthday} : {$habby}";

    $icon = null;
    if ($_FILES['icon']['error'] == 0){
        $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name'])) ;
    }

    $sql = "INSERT INTO member (account,passwd,email,birthday,habby,icon) " .
        "VALUES ('{$account}','{$passwd}','{$email}','{$birthday}','{$habby}','{$icon}' )";

    if ($mysqli->query($sql)){
        echo 'OK';
    }else{
        echo 'XX';
    }


?>