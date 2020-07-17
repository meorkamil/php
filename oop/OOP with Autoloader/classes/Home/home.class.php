<?php

namespace Home;

class Home {

    public $name;
    public $address;
    public $telno;
    public static $negeri = "Perak";

    public function __construct($name, $address, $telno){
        $this->name = $name;
        $this->address = $address;
        $this->telno = $telno;
    }

    public function setName($name){
        $this->name = $name;
    }
    
    public function setAddress($address){
        $this->address = $address;
    }

    public function setTelno($telno){
        $this->telno = $telno;
    }


    public function getTelno(){
        return $this->telno;
    }
    public function getName(){
        return $this->name;
    }
    public function getAddress(){
        return $this->address;
    }

    public static function getNegeri(){
        return self::$negeri;
    }

    public static function setNegeri($newNegeri){
        self::$negeri = $newNegeri;
    }
}
    //propreties and methods goes here

