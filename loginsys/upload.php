<?php
if (isset($_POST['submit'])){
    $file = $_FILES['file'];
    //print_r($file);
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    //getnameoffile
    $fileExt = explode('.', $fileName);
    //convertfilenameto lowercase
    $fileActualExt = strtolower(end($fileExt));
    //extensionstoallow
    $allowed = array('jpg', 'jpeg','png', 'pdf');

    //checksifavalueisinthearray:in_array
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize <100000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location:home.php?UPLOAD_SUCCESSFUL!");
            }
            else{
                echo "The file is larger than the file capacity!";
            }
        }
        else{
            echo "There was an error uploading file!";
        }
    }
    else{
        echo "This file type is not allowed";

    }
}
?>