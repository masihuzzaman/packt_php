<?php
// Defining a typical object, take note of the method that we defined
class Dog {
     public function __invoke(){
     echo "Bark";
     }
}
// Initialize a new instance of the dog object
$sparky = new Dog();
// Here's where the magic happens, we can now call this
$sparky();
?>