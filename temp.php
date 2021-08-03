<?php
    // 看 $_FILES['upload'] 有無上傳到此，沒有的話回到 brad44.html 。
    if (!isset($_FILES['upload'])) header("Location: brad44.html");
    
    $upload = $_FILES['upload'];
    // var_dump($upload);
    // 結果：  array(5) { ["name"]=> string(10) "brad06.php" 
        // ["type"]=> string(24) "application/octet-stream" 
        // ["tmp_name"]=> string(45) "C:\Users\zxasq\AppData\Local\Temp\php1FBE.tmp" 
        // ["error"]=> int(0) //上傳成功
        // ["size"]=> int(1994) }
    if ($upload['error'] == 0) {
        // upload success
        if (move_uploaded_file(
            $upload['tmp_name'],
            "upload/{$upload['name']}"
        )) {
            echo 'upload success';
        } else {
            "Ooop2!";
        }
    } else {
        // upload failure
        echo "Ooop1!";
    }
?>
memory_limit = 128M
post_max_size = 64M
upload_max_filesize = 32M
