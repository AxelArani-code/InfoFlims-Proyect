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
    $detalles = stripslashes($_POST['detalles']);
  
    // Upload image only if no errors
    if (empty($error)) {
        $sql = "INSERT comentarios SET detalles='$detalles'";
        if(mysqli_query($conn, $sql)){
          $msg = "Image uploaded and saved in the Database";
          $msg_class = "alert-success";
        } else {
          $msg = "There was an error in the database";
          $msg_class = "alert-danger";
        }
    }
  }
?>