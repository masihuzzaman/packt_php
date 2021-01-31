<?php
$days = ["Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];
$totalDays = count($days);
print(count($days)) . " days";
echo '<br>';
for ($i = 0; $i < $totalDays; $i++) {
    echo $days[$i] . " ";
    echo '<br>';
}
//outputs
//Saturday Sunday Monday Tuesday Wednesday Thursday Friday
?>