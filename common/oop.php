<?php

include 'classes/animal.class.php';
require_once 'classes/server.class.php';

// $animal = new Animal("Tiger", "Mamal");
$tiger = new Tiger("Tiget","Mamal");
$server = new Server();
$tiger->details();
//$tiger->message();
// echo $server->getServerName();
// echo $server->getPhpSelf();

?>