<?php
//In the following exercise, you will learn how to utilize the if...elseif...else control structure to determine an age range. We will create a script that has a variable named $age with a number representing the age. If the age value is equal to or greater than 18, then print "young"; otherwise, if the age value is less than 18 and greater than 10, print "teenager". If the age is less than 10, then print "child".
//Declare age.
$age = 10;
if ($age >= 18) {
    print("Young");
} elseif ($age > 10) {
    print("Teenager");
} else {
    print("child");
}
?>