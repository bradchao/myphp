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

    var_dump($brad);

?>
object(Person)#1 (3) { 
    ["name":"Person":private]=> string(4) "Brad" 
    ["bike":"Person":private]=> object(Bike)#2 (1) { 
        ["speed":protected]=> float(1.728) 
    } 
    ["scooter":"Person":private]=> object(Scooter)#3 (2) {
         ["gear":"Scooter":private]=> int(0) 
         ["speed":protected]=> int(0) 
        } 
}