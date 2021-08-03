<?php
    if (!isset($_GET['filename'])) die("get out here!");

    $filename = $_GET['filename'];
    $content = $_GET['content'];

    if (!file_exists("dir2")){
        if (!mkdir("dir2", 0777)){
            die("ERROR 01");
        }
    }

    $fp = @fopen("dir2/{$filename}", 'w');
    fwrite($fp, $content);
    fclose($fp);
    // 輸出轉導向: URL
    header("Location: dir2/{$filename}");


?>