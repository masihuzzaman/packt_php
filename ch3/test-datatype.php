<?php
//In the following exercise, we will create a script that will get the type of a variable using the built-in gettype() function in a switch test case and print custom messages for different data types.
//Declare data type.

$data = 7e2;
switch (gettype($data)) {
    case 'integer':
    case 'double':
        echo "The data type is Number.";
        break;
    case 'boolean':
        echo "The data type is Boolean.";
        break;
    case 'string':
        echo "The data type is String.";
        break;
    case 'array':
        echo "The data type is Array.";
        break;
    default:
        echo "The data type is unkown.";
}
?>