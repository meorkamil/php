<?php

$string ="a a a b b c c d d";

$string_array = explode(" ", $string);


$final_array = array_unique($string_array);

$final_string = implode(" ", $final_array);

echo $string."<br>";

echo $final_string;


?>