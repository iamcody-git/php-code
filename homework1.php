
<?php
/*
homework
1. before uploading files, check if the file is a valid image 
hint: check $_FILES['fiename']['type']="image/jpeg", "image/png" "image/jpg".

*/

if(isset($_POST['submit'])) {
    if(isset($_FILES['file'])) $file = $_FILES['file'];
    else die("file upload error");
    
    var_dump($file);
    $fileType = $file['type'];
    $validTypes = ['image/jpg', 'image/jpeg', 'image/png'];
    
    if(!in_array($fileType, $validTypes)) die("Only .jpg, .jpeg & .png files are supported");


    $location = './photos/'.$file['name'];
    move_uploaded_file($file['tmp_name'], $location);
    echo('<br>Uploaded image: <br> <img src="'.$location.'" width="500px"/>');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file uploads</title>
</head>
<body>
    <h1>File Upload </h1>
    <form method="post" enctype="multipart/form-data"> 
<label>Upload a photo </label><br><br>
<input type="file" name="photo"><br>

<button name="submit">submit</button>

    </form>
</body>
</html>