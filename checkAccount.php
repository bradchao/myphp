<?php
    // 檢查資料庫中是否存在相同的帳號
    // 傳回檢查到的筆數 0 / 1
    if (!isset($_GET['account'])) return;

    include('bradsql.php');
    $account = $_GET['account'];

    $sql = "SELECT account FROM member WHERE account = '{$account}'";
    $result = $mysqli->query($sql);
    $rows = $result->num_rows;
    echo $rows>0 ? 'XXX' : '';
?>