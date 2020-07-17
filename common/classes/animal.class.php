<?php

class Animal{

    private $name;
    private $type;

    function __construct($name, $type){
        $this->name = $name;
        $this->type = $name;
    }
    
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setType($type){
        $this->$type = $type;
    }

    public function getType(){
        return $this->type;
    }

    public function details(){
        echo "the details:<br> Name = {$this->name}<br> Type ={$this->type}";
    }

}

class Tiger extends Animal{

    public function message(){
        echo "this is tiger class";
    }
}

?>