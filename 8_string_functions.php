<?php

$my_string = "hello world";

//=> Get the length of a string
// echo strlen($my_string);

//=> find first occurence position(index of a character)

// echo strpos($my_string, "l");

//=> find last occurence position(index of a character)

// echo strrpos($my_string, "l");

// => reverse a string

// echo strrev($my_string);

// // =>convert all chars to lowercase
// echo strtolower($my_string);

// // =>convert all chars to uppercase
// echo strtoupper($my_string);

// Uppercase the first char of each word{titlecase}
// echo ucwords($my_string);

// string replace
// echo str_replace("hello", "Sucka", $my_string);

// // => prevent injection of html tags

// $string = "<script>alert(1)</script>";

// echo htmlspecialchars($string);

// => php also supports the printf function that works like it does in c

printf("My name is %s, and tonight, i raise hell!", "Stone Cold Steve Austin");