<?php
// Actualizamos en funcion del id que recibimos
$in_id=$_REQUEST['id'];

$conn = mysqli_connect("localhost", "root", "", "demo");
$sql = "DELETE FROM reciente WHERE id='$in_id'";

if ($conn->query($sql) === TRUE) {
  echo "Registro eliminado correctamente";
} else {
  echo "Error al eliminar el registro: " . $conn->error;
}

$conn->close();
?>