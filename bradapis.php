<?php
    function checkTWId($id){
        if (preg_match('/^[A-Z][12][0-9]{8}$/', $id)){
            $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
            $c1 = substr($id, 0, 1);
            $n12 = strpos($letters, $c1) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;
            $n3 = substr($id, 1, 1);
            $n4 = substr($id, 2, 1);
            $n5 = substr($id, 3, 1);
            $n6 = substr($id, 4, 1);
            $n7 = substr($id, 5, 1);
            $n8 = substr($id, 6, 1);
            $n9 = substr($id, 7, 1);
            $n10 = substr($id, 8, 1);
            $n11 = substr($id, 9, 1);
            $sum = $n1*1 + $n2*9 + $n3*8 + $n4*7 + $n5*6 + $n6*5 +
                    $n7*4 + $n8*3 + $n9*2 + $n10*1 + $n11*1;
            return $sum % 10 == 0;
        }
        return false;
    }

    function createTWIdByRandom(){
        $gender = rand(0,1) == 0;
        return createTWIdByGender($gender);
    }
    function createTWIdByGender($gender = false){
        $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $area = substr($letters, rand(0,25), 1);
        return createTWIdByBoth($gender, $area);
    }
    function createTWIdByArea($area = 'B'){
        $gender = rand(0,1) == 0;
        return createTWIdByBoth($gender, $area);
    }
    function createTWIdByBoth($gender, $area){
        // $area .= $gender?'1':'2';
        // for ($i=0; $i<7; $i++) $area .= rand(0,9);
        // // A12345678   9 => 0-9
        // for ($i=0; $i<=9; $i++){
        //     if (checkTWId($area . $i)){
        //         $area .= $i;
        //     }
        // }
        // return $area;

        // A123456789
        $tempId = $area;    // $tempId = 'A';
        $tempId .= $gender?'1':'2'; // $tempId = 'A1'; $tempId = 'A2'
        // A12345678
        for ($i=0; $i<7; $i++){ 
            $tempId .= rand(0,9);
        }
        // A12345678   9 => 0-9
        for ($i=0; $i<=9; $i++){
            if (checkTWId($tempId . $i)){
                $tempId .= $i;
            }
        }
        return $tempId;
    }

    class Bike {
        // Bike has-a speed
        protected $speed = 0;
    
        // Bike has-a upSpeed()
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

    // Scooter is-a Bike
    class Scooter extends Bike {
        private $gear = 0;

        function chGear($gear = 0){
            if ($gear >= 0 && $gear <= 7){
                $this->gear = $gear;
            }
        }

        function upSpeed(){
            $this->speed = $this->speed < 1 ? 1 : $this->speed*($this->gear*1.2);
        }

        function dump(){
            var_dump($this);
        }
    }

    class Person {
        private $name, $bike, $scooter;
        // 建構式/建構子/建構方法/Constructor => 物件初始化
        // 進行屬性的初始化
        function __construct($name){
            $this->name = $name;
            $this->bike = new Bike;
            $this->scooter = new Scooter;
        }

        function getName(){return $this->name;}
        function getBike(){return $this->bike;}
        function getScooter(){return $this->scooter;}
    }








?>