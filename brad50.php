<?php
    $img = imagecreatefromjpeg('coffee.jpeg');

    $yellow = imagecolorallocate($img, 255,255,0);
    imagettftext($img, 24, -10, 40, 100, $yellow, 'font1.otf', 'Hello, 資策會');

    // output : 1. file 2. Browser
    header('Content-type: image/jpeg');
    imagejpeg($img);

    imagejpeg($img, "upload/brad.jpg");

    imagedestroy($img);
?>
