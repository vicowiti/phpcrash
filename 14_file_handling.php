
<?php

/*
===== FILE HANDLING =====

- File handling in php is the ability to read and write files on the server.
- PHP has inbuilt functions to do the job.
*/

$file = './extras/users.txt'; //Reference to a file

// Check if file exists.

if(file_exists($file)){
    echo "Users file exists";
}else{
    echo "File unavailable";
}

// Read file contents

echo "<hr>";

if(file_exists($file)){
    // echo readfile($file);
    // => pointer to file

    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
}else{
    $handle = fopen($file, 'w');

    $contents = "Lebron" . PHP_EOL . "kING";
    fwrite($handle,$contents);
    fclose($handle);
}