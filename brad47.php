<?php
    $upload = $_FILES['upload'];
    //var_dump($upload);

    foreach($upload['error'] as $k => $v){
        if ($v == 0){
            // $k
            $filename = date('Ymd_His') . "_{$k}.jpg";
            if (move_uploaded_file($upload['tmp_name'][$k],
                "upload/{$filename}")){
                echo "Upload OK {$k}<br />";
                
            }
        }
    }

?>
