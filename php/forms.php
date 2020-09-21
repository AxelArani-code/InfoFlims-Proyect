<?php
    $destino="axelaranibar3@gmail.com";
    $nombre=$_POST["nombre"];
    $correo=$_POST["correo"];
    $telefono=$_POST["telefono"];
    $mensaje=$_POST["mensaje"];
    $contenido="Nombre: ". $nombre ."\nCorreo". $correo . "\nTelefono". $telefono . "\nMensaje". $mensaje;
    mail($destino, "Contacto ", $contenido);
    if(mail){
        header("location: index.html");
        echo "<script>alert('Mensaje enviado')</script>";
        
   }else{
       echo"Hay unos problemas, ya lo areglaremos.";
   }
?>