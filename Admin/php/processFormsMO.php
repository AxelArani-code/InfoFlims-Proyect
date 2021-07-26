<?php
// Initialize the session
session_start();

//Assigning messages
  $msg = "";
  $msg_class = "";

  $conn = mysqli_connect("localhost", "root", "", "demo");
  if (isset($_POST['save_profile'])) {
    // for the database
    //Variables
    $titles = stripslashes($_POST['titles']);
    $descriptions = stripslashes($_POST['descriptions']);
  
    
    
    $profileImageName = time() . '-' . $_FILES["imagenes"]["name"];
    // For image upload
    $target_dir = ".././assets/img/ ";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['imagenes']['size'] > 400000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists"; 
      $msg_class = "alert-danger";
    }

    
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["imagenes"]["tmp_name"], $target_file)) {
        $sql = "INSERT reciente SET imagenes='$profileImageName' , titles='$titles', descriptions='$descriptions'";
        if(mysqli_query($conn, $sql)){
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
      } else {
        $error = "There was an erro uploading the file";
        $msg = "alert-danger";
      }
    }
  }
  
?>