<?php
//In this exercise, we will simply iterate through a while loop to print numbers 1 through 10 and will apply a condition expression to check the numbers are within a range of 1 to 10 as we will be incrementing the number by 1
$number = 1;
while ($number <= 10) {
    echo $number . " ";
    $number++;
}
// use do-while to print numbers upto 10.
echo '<br>';
$count = 1;
do {
     echo $count . " ";
     $count++;
} while ($count <= 10);
// use for loop to print numbers upto 10.
echo '<br>';
for ($index = 1; $index <= 10; $index++) {
    echo "$index \n";
}
//use for loop with break and if.
echo '<br>';
$num = 1;
for (;;) {
    if ($num > 10) {
        break;
    }
    echo "$num \n";
    $num++;
}
?>