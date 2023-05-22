<?php

/* === COOKIES ====*/

/*
Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users.
You can set specific data to be stored in the browser and then retrieve it when the user visits the site again.
*/
// Setting a cookie

setcookie("name", "Victor", time() + 86400 * 30);

// Check if cookie is available, then display it

if(isset($_COOKIE["name"])){
echo "<h1>Welcome back, ${_COOKIE['name']}</h1>";
}

// To unset a cookie, set in to the past
setcookie("name", "", time() - 86400);