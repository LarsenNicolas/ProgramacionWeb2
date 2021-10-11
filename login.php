<?php
session_start();
include 'conexion.php'; // siempre llamo a conexion  para que este conectado con la base de datos
$contrasenalogin = $_POST['contrasenalogin'];  //creo variables, les asigno lo ingresado en formulario
$correologin = $_POST['correologin'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correologin'
and contrasena='$contrasenalogin'"); //genero una variable y comparo con correo y contraseña

if(mysqli_num_rows($validar_login) > 0){ // si coinciden lo envio a la pagina de bienvenido
    $_SESSION['usuarios']=$correologin;
    header("location: bienvenido.php");
    exit;
}else{   //si no mensaje de error y de nuevo a la pagina principal
    echo "<script>alert('Usuario/contraseña incorrecto, por favor vuelva a intentarlo');
    document.location='principal.php'</script>";
    exit;




?>