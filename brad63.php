<?php
    if (!isset($_GET['account'])) return;

    include('bradsql.php');
    $account = $_GET['account'];

    $sql = "SELECT * FROM member WHERE account = '{$account}'";
    $result = $mysqli->query($sql);
    $rows = $result->num_rows;
    echo $rows>0 ? 'XXX' : '';
?>