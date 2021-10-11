<?php
session_start();
include 'conexion.php';
$contrasenalogin = $_POST['contrasenalogin'];
$correologin = $_POST['correologin'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correologin'
and contrasena='$contrasenalogin'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuarios']=$correologin;
    header("location: bienvenido.php");
    exit;
}else{
    echo "<script>alert('Usuario/contraseña incorrecto, por favor vuelva a intentarlo');
    document.location='principal.php'</script>";



    /*echo '<script>
    alert("Usuario/contraseña ingresado no son correctos, vuelve a intentarlo nuevmante");
    window.location.replace = index.php; 
   </script>';
    exit;*/
}

?>