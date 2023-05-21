<?php

// SUPERGLOBALS  are builtin variables that are available in all scopes

/* =====LETS HAVE A LOOK AT SOME OF THEM ===== */

// $_GET: Contains info about variables passed through a URL or a form

// $_POST: Contains info about variables passed through a form with method set to post.

// $_COOKIE: contains info about variables passed through a cookie

// $_SESSION: contains info about variables passed through a session

// $_SERVER: contains info about the server environment.

// $_ENV: contains info about environmental variables.

// $_FILES: Contains info about files uploaded to the script.

// $_REQUEST: Contains information about variables passes through the fprm or url

// See what the $_SERVER superglobal contains

var_dump($_SERVER);