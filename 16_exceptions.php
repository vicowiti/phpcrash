<?php

/*
===== EXCEPTIONS

Similar to other languages. An exception can be thrown and caught.

this is done in a try-catch block, with an  optional finally block
*/

function inverse($val){
    if(!$val){
        throw new Exception("Division by zero");
    }

    return 1/$val;   
}



try {
echo inverse(0);
}catch(Exception $e){
    echo $e;
}

// Catching error keeps our scripts running