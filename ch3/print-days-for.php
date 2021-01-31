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

print '<br>';
//Using a foreach Loop to Print the Days of the Week
$daysInWeek = ["Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];
foreach ($daysInWeek as $day) {
    echo $day . " ";
}
//outputs
//Saturday Sunday Monday Tuesday Wednesday Thursday Friday
?>