<?php
// 現在先進行 => 定義 => Bike 是什麼東西 => 產生物件 => 才能使用物件
class Bike {
    private $speed = 0;

    function upSpeed(){
        $this->speed = $this->speed < 1 ? 1 : $this->speed*1.2 ;
    }
    function downSpeed(){
        $this->speed = $this->speed < 1 ? 0 : $this->speed*0.7 ;
    }  
    function getSpeed(){
        return $this->speed;
    }  
}

$myBike = new Bike;
$urBike = new Bike;

$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();
$urBike->upSpeed();$urBike->upSpeed();$urBike->downSpeed();$urBike->upSpeed();
echo "myBike : {$myBike->getSpeed()}<br>";
echo "urBike : {$urBike->getSpeed()}<br>";




?>