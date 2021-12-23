<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A short description of the web page purpose/ intent">
    <meta name="author" content="Your name 2021">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   

    <style>

h4{color:red;margin-top: 10vh;}
    
    </style>
</head>
<body>

<div class="container">
<div class="row">



<header>
  
<h1>2. Upload Image to a folder on your server - check image dimensions </h1>


</header>


<form enctype="multipart/form-data" action="upload-image.php" method="POST">

<input name="uploaded-image" type="file"><br>
  
 <input type="submit" value="Upload image" name="submit">
 </form> 

</div>



<footer class="footer mt-auto py-3 bg-light navbar-fixed-bottom text-center">
  <div class="container">
    <span class="text-muted">Upload Image</span>
  </div>
</footer>
</div>





</body>
</html>