<?php
    $context = stream_context_create(array('ssl'=>array(
        'verify_peer' => true,
        'cafile' => 'ca-bundle.crt'
    )));
    libxml_set_streams_context($context);

    $fp = fopen('https://www.iii.org.tw/', 'rb', false, $context) or die();
    // $fp = fopen('https://www.bradchao.com/', 'r');

    $i = 0;
    while ($line = @fgetss($fp)){
        echo $i++ . $line . '<br />';
    }

    fclose($fp);
?>
