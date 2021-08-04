<?php
    if (isset($_GET['rate'])){
        $rate = $_GET['rate'];
    }else{
        $rate = 0;
    }

    // 1. 畫布
    $img = imagecreate(400, 24);
    
    // 2. 作畫（記憶體)
    $yellow = imagecolorallocate($img, 255,255,0);
    $red = imagecolorallocate($img, 255,0,0);
    imagefill($img, 0, 0, $yellow);
    imagefilledrectangle($img, 0, 0, 400*$rate/100, 24, $red);

    // 3. 輸出
    header('Content-type: image/jpeg');
    imagejpeg($img);

    // 4. 釋放記憶體
    imagedestroy($img);
?>
