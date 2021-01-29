<?php
/*$x = "13.3333";
var_dump($x);
echo "<br>";
$y = (float) $x;
var_dump($y);*/

echo '<h3>Boolean to Int</h3>';
$trueValueBool = true;
$falseValueBool = false;

echo '<h3>Before type conversion:</h3>';
var_dump($trueValueBool);
echo '<br>';
var_dump($falseValueBool);

echo '<h3>After type conversion:</h3>';
$trueValueBool = (int) ($trueValueBool);
$falseValueBool = (int) ($falseValueBool);
var_dump($trueValueBool);
echo '<br>';
var_dump($falseValueBool);
echo '<h3> int to string:</h3>';
$number = 1234;
echo '<h3>Before type conversion:</h3>';
var_dump($number);
echo '<br>';
echo '<h3>After conversion:</h3>';
$stringValue = (string) ($number);
var_dump($stringValue);
echo '<br>'; 
//$isString = is_int($stringValue);
//echo $isString;
?>