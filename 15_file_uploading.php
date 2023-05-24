<?php

print_r($_POST);
print_r($_FILES);

if(isset($_POST['submit'])){

    if(!empty($_FILES["upload"]["name"])){

        $file_name = $_FILES["upload"]["name"];
        $file_temp = $_FILES["upload"]['tmp_name'];
        $target_dir = "uploads/${file_name}";

        move_uploaded_file($file_temp, $target_dir);
    }

    else{
        echo "<p style='color:red'>" . "No image uploaded" . "</p>";
    }}
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <h1>Select Image to upload</h1>
    <input type="file" name="upload">
    <div><input type="submit" value="Submit" name="submit"></div>
</form>

</body>
</html>