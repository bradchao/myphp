<?php
    if (!isset($_FILES['upload'])) header("Location: brad44.html");

    $upload = $_FILES['upload'];

    if ($upload['error'] == 0){
        // upload success
        if (move_uploaded_file($upload['tmp_name'],
                "upload/{$upload['name']}")){
            echo 'upload success';
        }else{
            "Ooop2!";
        }
    }else{
        // upload failure
        echo "Ooop1!";
    }

?>
