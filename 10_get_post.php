<?php
// Check to prevent initial error

if(isset($_POST['submit'])){
echo $_POST["name"];
print_r($_POST);
}else echo "run";

?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">

<div>
    <label for="name">Name</label>
    <input type="text" name="name">
</div>

<div>
    <label for="age">Age</label>
    <input type="text" name="age">
</div>

<input type="submit" value="submit" name="submit" >
</form>