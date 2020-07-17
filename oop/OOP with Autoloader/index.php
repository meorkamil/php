<?php

include 'includes/autoloader.inc.php';


// $person1 = new Person\Person("Daniel", "Blue", 28);
// echo $person1->getDA();

// $testObj = new Test();
// echo $testObj->getProducts();

$homeObj = new Home\Home("kamil", "31100", "0135071613");
//$homeObj->setName("kamil");
echo $homeObj->getNegeri();
echo $homeObj->getAddress();
echo $homeObj->getTelno();
$homeObj->setNegeri("johor");
echo Home\Home::$negeri;
?>