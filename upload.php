<?php
/*
file uploading

php.ini configuration file

file_upload = ON; // enable file uploads
max_input_time =60; // 60 seconds is max time spending parsing the file
max_file_uploads = 20; // max number files which can be uploaded at a time
memory_limit=16M; // memory limit in mb ; memory_limit_max = -1 gives unlimited memory size
post_max_size = 40M; // 
upload_max_filesize = 40M; //

*/

/*
$_FILES = superglobal variables to handle file upload

$_FILES['userfile] ['error] => 0 if no error, otherwise sets error code
$_FILES['userfile] ['name'] => specifies original name of the file incliding extension
$_FILES['userfile] ['size'] => specifies size of the file
$_FILES['username']['tmp_name']=> specifies temporary name assigned to file once uploaded to server
$_FILES['username']['type']=> specifies MIME type of uploaded file

*/

/* to uploads file we have given function
move_uploaded_file(tmp_name, $destination)
*/
if(isset($_POST['submit'])){
    if(isset($_FILES['photo']['error']) && $_FILES['photo']['error']==0){

        $temName = $_FILES['photo']['tmp_name'];
        $destination = 'photos/' .$_FILES['photo']['name'];

     $isUploaded = move_uploaded_file($temName,$destination);
     if($isUploaded==true){
        echo "file uploaded successfully";
     }else{
        echo "file not uploaded";
     }
    }else{
        die("There was an error upload uploading file :" . 
        $_FILES['photo']['error']);
    }

}
/*
homework
1. before uploading files, check if the file is a valid image 
hint: check $_FILES['fiename']['type']="image/jpeg", "image/png" "image/jpg".

*/



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
