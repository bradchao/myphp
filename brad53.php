<?php
    include('bradapis.php');

    $brad = new Person('Brad');
    $mark = new Person('Mark');

    $brad->getBike()->upSpeed();
    $brad->getBike()->upSpeed();
    $brad->getBike()->upSpeed();
    $brad->getBike()->upSpeed();

    $mark->getScooter()->chGear(4);
    $mark->getScooter()->upSpeed();
    $mark->getScooter()->upSpeed();
    $mark->getScooter()->upSpeed();

    echo "{$brad->getName()}:Bike:{$brad->getBike()->getSpeed()}<br />";
    echo "{$brad->getName()}:Scooter:{$brad->getScooter()->getSpeed()}<br />";
    echo "{$mark->getName()}:Bike:{$mark->getBike()->getSpeed()}<br />";
    echo "{$mark->getName()}:Scooter:{$mark->getScooter()->getSpeed()}<br />";
    echo "<hr />";

?>