<?php
$animals = ['Lion', 'Cat', 'Dog'];
print_r($animals);
echo '<br>';
//add Wolf to array
//$animals[] = 'Wolf';
array_push($animals, 'Wolf');
print_r($animals);
$poppedOut = array_pop($animals);
echo '<br>';
print_r($animals);
echo '<br>';
print_r($poppedOut);
echo '<br>';
unset($animals[2]);
print_r($animals);