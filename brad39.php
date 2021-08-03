<?php
    $context = stream_context_create(array('ssl'=>array(
        'verify_peer' => true,
        'cafile' => 'ca-bundle.crt'
    )));
    libxml_set_streams_context($context);

    $fp = fopen('https://www.iii.org.tw/', 'r', false, $context) or die();

    $i = 0;
    while ($line = @fgetss($fp)){
        echo $i++ . $line . '<br />';
    }

    fclose($fp);
?>