<?php
$conexion = mysqli_connect("localhost", "root", "", "demo");
$buscar=$_POST['buscar'];
$SQL_READ="SELECT * FROM information WHERE title LIKE  '%".$buscar."%'  OR descriptions LIKE '%".$buscar."%'  ";

$sql_query= mysql_query($conexion,$SQL_READ);

?>