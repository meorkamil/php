<?php
 $cars = array("lamborghini", "Mustang", "Ferrari");
 $array_length = count($cars);
 sort($cars);

 for($x=0; $x < $array_length; $x++){
     echo "<br>";
     echo $cars[$x];
 }

 $associate_cars = array("Supercar" => "lamborgini", "SUV" => "Urus", "MPV" => "Velfire");

 foreach($associate_cars as $key => $value){
     
     echo "<br>";
     echo "Type: $key Name: $value";

 }

 $multi_array = array(
     array("Volvo", 22,),
     array("BMW", 15, ),
     array("Saab", 5, ),
     array("Land Rover", 17,)
 );


 for($row=0; $row<4; $row++){
     for($col=0; $col<2; $col++){
         echo"<br>";
         echo $multi_array[$row][$col];
     }
 }
 

?>