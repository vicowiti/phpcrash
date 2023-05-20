<?php

// Loops enable iteration as long as a certain condition is true

// => For loops

// for(initialization; condition; increment){

// }

// => While loops

// while(condition){
//     action to round
//     increment or decrement to prevent infinity
// }

//  => Do While loop: runs atleast once

// do{
// //actions that run atleast once
// }while(condition)

// For each : for handling arrays

$myPosts = ["Post 1", "Post 2", "Post 3"];

foreach($myPosts as $index => $post){
    echo "index: $index => data: $post <br>";
}