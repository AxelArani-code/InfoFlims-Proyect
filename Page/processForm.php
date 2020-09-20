<?php
// Initialize the session
session_start();
$id=$_SESSION['id'];
echo $id;
//Assigning messages
  $msg = "";
  $msg_class = "";



  $conn = mysqli_connect("localhost", "root", "", "demo");
  if (isset($_POST['save_profile'])) {
    // for the database
    //Variables
    $bio = stripslashes($_POST['bio']);
    $nombre = stripslashes($_POST['nombre']);
    $apellido = stripslashes($_POST['apellido']);
    $email = stripslashes($_POST['email']);
    $telefono = stripslashes($_POST['telefono']);
    $genero = stripslashes($_POST['genero']);
    
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 400000) {
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
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        $sql = "UPDATE  users SET profile_image='$profileImageName' ,bio='$bio', nombre='$nombre', apellido='$apellido', email='$email', telefono='$telefono',genero='$genero' WHERE id ='$id'";
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