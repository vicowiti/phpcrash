<?php

// These are builtin php functions to manipulate array data

$fruits =[
    "mango",
    "peach",
    "orange",
    "apple"
];

// Get array length

// echo count($fruits);

// Search array => use the in_array(searchItem, array) function, returns a boolen

// var_dump(in_array("appe", $fruits));

// Add item to array : Can be done using several methods

// $fruits[] = "pineapples"; //=> method 1

// array_push($fruits, "tomatoes"); //=> method 2

print_r($fruits);

// Adding item at the front
// array_unshift($fruits, "avocado");

// Removing last item
// array_pop($fruits);

// Removing first item
// array_shift($fruits);

// Remove specific item

// unset($fruits[1]);

// print_r($fruits);


$arr1 = [1,2,3];
$arr2 = [3,4,5];

// Concat arrays

$concatedArr = array_merge($arr1,$arr2);

$concat2 = [...$arr1, ...$arr2];

print_r($concatedArr);

// php also has a filter, map and reduce functions that emulate javascript

?>