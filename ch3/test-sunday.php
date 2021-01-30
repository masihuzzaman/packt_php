<?php
/*
In the following exercise, you will learn to acquire the day using PHP's built-in **`date()`** function. You will be using an **`if...else`** test case to check whether today is Sunday, and then print **`Get rest`** or **`Get ready and go to the office`**:
*/
//understand date() function.
//Here, we have used a built-in date function with a date format flag, l (lowercase L), which returns a textual representation of the current day of the week
//echo date("l");

if ("Sunday" === date("l")) {
    echo "Get rest and enjoy your tea with you wife and kids.";
} else {
    echo "Get ready, squeeze your breakfast and run to office.";
}

echo '<br>';
$msg = ("Sunday" === date("l"))? "Get rest" : "Get ready and go to the office";
echo $msg;
?>