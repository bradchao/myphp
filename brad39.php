<?php
    $context = stream_context_create(array('ssl'=>array(
        'verify_peer' => true,
        'cafile' => 'ca-bundle.crt'
    )));
    libxml_set_streams_context($context);

    $fp = fopen('https://www.iii.org.tw/', 'r', false, $context) or die();
    // $fp = fopen('https://www.bradchao.com/', 'r');

    $i = 0;
    while ($line = @fgetss($fp)){
        echo $i++ . $line . '<br />';
    }

    fclose($fp);
?>

老師我想請教一下39檔案 即使複製老師的程式碼也一樣報錯 找不到問題在哪邊
來自 洪宇涓 至所有人:    下午 4:46 
Warning: fopen(): SSL operation failed with code 1. OpenSSL Error messages: error:14090086:SSL routines:ssl3_get_server_certificate:certificate verify failed in /Applications/MAMP/htdocs/myPHP/jen39.php on line 2
Warning: fopen(): Failed to enable crypto in /Applications/MAMP/htdocs/myPHP/jen39.php on line 2
Warning: fopen(https://www.iii.org.tw/): failed to open stream: operation failed in /Applications/MAMP/htdocs/myPHP/jen39.php on line 2