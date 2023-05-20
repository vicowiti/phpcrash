<?php

// Functions are block of related code that are grouped together for the purpose of reuse.
// Once invoked, the function code is run

// => simple function to output a string

function greetUser(){
    echo "Hello, how are you?";
};

greetUser();

// => Functions have their own local state => if a function is to use a global variable, pass the keyword global.

// => Functions can take arguments

//  => Function arguments can have default values , making passing them on function call optional.

//  => Can use arrow functions to enable one liners  $multiply = fn($num1, $num2) => num1 * num2;