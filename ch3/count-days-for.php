<?php
$days = ["Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];
print(count($days));
echo '<br>';
$totalDays = count($days);
for ($i = 0; $i < $totalDays; $i++) {
     echo $days[$i] . " ";
}
//outputs
//Saturday Sunday Monday Tuesday Wednesday Thursday Friday
