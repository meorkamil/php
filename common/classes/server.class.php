<?php

class Server{

    public function setServerName(){

    }
    public function getPhpSelf(){
        return $_SERVER['PHP_SELF'];
    }

    public function getServerName(){
        return $_SERVER['SERVER_NAME'];
    }

    
}


?>