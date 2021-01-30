<?php
//In the following exercise, we will practice using a nested if...else structure with a different sort of expression within the control statement. We will create a script that will print the difference between two given numbers based on the fact that one number is greater than the other one and the numbers are not equal. Here, both numbers are positive integers.
//With the help of a nested if...else structure, we will be testing whether the numbers are equal or not. If they're not equal, then we'll determine which number is greater and subtract the other number from it to print the difference.
//Declare two variables, $a and $b, and assign them values of 5 and 3 respectively.
$a = 5;
$b = 3;
//Insert an if…else structure.
if ($a - $b) { //The example expression ($a - $b) depends on the fact that 0 is considered as false, so if the difference is zero, then the expression will be evaluated as false, hence "The numbers are equal" will be printed.
    if ($a > $b) {
        $difference = $a - $b;
    } else {
        $difference = $b - $a;
    }
    print("The difference is $difference.");
    //placeholder for inner if...else
} else {
    print("The numbers are equal.");
}