<?php
session_start();
if(isset($_SESSION['username'])){
echo "My global session variable:",  $_SESSION["username"];
}else {
    echo "My global session variable:" . "Stranger";
}


// session_destroy() destroys a session, can be used with logout logic