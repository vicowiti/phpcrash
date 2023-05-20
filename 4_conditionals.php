<?php

// Conditionals drive decision making by reacting to the result of a boolean operation

//  => if else elseif statements

if (true){
    echo "I am true";
}

//  => switch statements

$myName = "Victr";

switch($myName){
    case "Victor":
        echo "Welcome Master";
        break;
    
    case "Rafa":
        echo "Best tennis player ever!";
        break;
    
        default:
            echo "Who tf are you?";
}

// Coalescent operator => php 7.3

$myAge = 26;

echo $myAge < 30 ?? null;

// Ternary operator like javascript for one liners

echo $myAge > 27 ? "We mzee" : "You are at your prime";