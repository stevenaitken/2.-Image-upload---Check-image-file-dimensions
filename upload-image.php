<?php

include 'includes/errors.php';

if(isset($_POST["submit"])) {
$target_dir = "images/"; //target directory for images
$target_file = $target_dir . basename($_FILES["uploaded-image"]["name"]); //full pathname of image

    $imageInformation = getimagesize($_FILES['uploaded-image']['tmp_name']);
    print_r($imageInformation);

   $imageWidth = $imageInformation[0]; 
   $imageHeight = $imageInformation[1]; 

     if($imageWidth > "50" && $imageHeight > "50")
    {
  
    exit("<p>Image needs to be 50px by 50px or less</p>");
    }
  

 
//if the image is successfully moved to its new location

    if (move_uploaded_file($_FILES["uploaded-image"]["tmp_name"], $target_file)) {

       
        echo $target_file; //you can use $target_file var to store path name in the database
    } 
//if the image is not successfully moved to its new location
	else {
        echo "There was an error uploading your file.";
    }


}




?>

