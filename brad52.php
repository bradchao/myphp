<?php
    include('bradapis.php');

    $myScooter = new Scooter;
    echo $myScooter->getSpeed() . '<br />';
    $myScooter->upSpeed();
    $myScooter->upSpeed();
    $myScooter->chGear(4);
    $myScooter->upSpeed();
    $myScooter->upSpeed();
    $myScooter->upSpeed();
    echo $myScooter->getSpeed() . '<br />';


?>
