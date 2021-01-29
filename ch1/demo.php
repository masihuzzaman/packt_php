<?php
$number = 100;
$longString = <<<STRING
This is going to 
be a "long" string 
stored in / $number / 

variable.
STRING;
echo $longString;
?>