<?php
    include('bradapis.php');

    $myScooter = new Scooter;
    $urScooter = new Scooter;
    $myScooter->upSpeed();$myScooter->upSpeed();
    $urScooter->upSpeed();$myScooter->downSpeed();
    $myScooter->chGear(2);
    $urScooter->chGear(3);

    $myScooter->dump();
    echo "<hr />";
    $urScooter->dump();
    echo "<hr />";
    var_dump($myScooter);
    echo "<hr />";
    var_dump($urScooter);

?>
