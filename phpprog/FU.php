<?php
$target_dir = "PATTERNIMAGE/";
$target_file = $target_dir . basename($_FILES["patternimage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["upload"])) {
  $check = getimagesize($_FILES["patternimage"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "<script>alert('File is not an image.');</script>";
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  echo "<script>alert('Sorry, file already exists.');</script>";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["patternimage"]["size"] > 500000) {
  echo "<script>alert('Sorry, your file is too large.');</script>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "txt" ) {
  echo "<script>alert('Sorry, only JPG, JPEG, PNG & TXT files are allowed.');</script>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<script>alert('Sorry, your file was not uploaded.');</script>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["patternimage"]["tmp_name"], $target_file)) 
  {
    echo "<script>alert('The file ". htmlspecialchars( basename( $_FILES["patternimage"]["name"])). " has been uploaded.');</script>";
    echo"<script>window.location = 'TAILORMADE.php';</script>";
  } else {
    echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
  }
}
}
?>