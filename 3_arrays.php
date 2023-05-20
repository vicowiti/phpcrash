<?php

$myArray = [1,2,3,4];

for($i = 0; $i < count($myArray); $i++){
    echo $myArray[$i];
}

?>

<?php

// Simple arrays

$number = [1,2,3,4,5];

$fruits = array("peaches", "oranges", "pineapples");

var_dump($fruits);

// Associative arrays 

// Can have multidimentionsl arrays and access data via indices
$myArr = [
    1 => 2,
    "ger" => 2
];

var_dump($myArr["ger"]);

//  Can convert arrays and other structures into json using => json_encode

var_dump(json_encode($myArr));

?>