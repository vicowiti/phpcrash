<?php
/*
 ==== SESSIONS ====
 Sessions are a way to info in variables to be used across multiple pages.
 Unlike cookies, sessions are stored in the server.
 */

 ?>

<?php
// Check to prevent initial error

session_start(); //Required in files using the session superglobal

if(isset($_POST['submit'])){

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if($username && $password){
        $_SESSION["username"] = $username;

        header("Location: /phpcrash/extras/dashboard.php");
    }
}

?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">

<div>
    <label for="username">username</label>
    <input type="text" name="username">
</div>

<div>
    <label for="password">Password</label>
    <input type="password" name="password">
</div>

<input type="submit" value="submit" name="submit" >
</form>