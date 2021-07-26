<?php
// Actualizamos en funcion del id que recibimos
$in_id=$_REQUEST['id'];

$conn = mysqli_connect("localhost", "root", "", "demo");
$sql = "DELETE FROM users WHERE id='$in_id'";

if ($conn->query($sql) === TRUE) {
    header("location: ../index.php");
} else {
  echo "Error en la base de datos. Intentalo otravez " . $conn->error;
}
$conn->close();
?>