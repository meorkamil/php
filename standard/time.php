<?php

date_default_timezone_set("Asia/Kuala_Lumpur");

echo "The time is " . date("h:i:sa");
echo "<br>";

/*

Create a Date with mktime()

 return Unix timestamp
 mktime(hour, minute, second, month, day, year);

 */

$dateUnix=mktime(11, 14, 51, 8, 12, 2013);
echo "Created date is " . date("Y-m-d h:i:sa", $dateUnix);
echo "<br>";

/*
 
Create Date from a sting with strtotime()

strtotime(time, now);

*/

$dateString=strtotime("10:30pm April 15 2014");
echo "Create date is " . date("Y:m:d h:i:sa", $dateString);
echo "<br>";

/*

PHP is quite clever about converting a string to a date, so you can put in various values:

*/
echo "---------------------------- <br>";
echo "CONVERT STRING TO DATE <br>";
echo "---------------------------- <br>";
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

?>