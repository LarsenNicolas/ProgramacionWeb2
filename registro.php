<?php
include 'conexion.php';
$email = $_POST['email'];  // crear las variables
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(email, contrasena, tipo) 
          VALUES('$email', '$contrasena', '$usuario')";   //insertar los datos denntro de la bd


$datos_iguales = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' "); //comoparar los mails para que no se ingrese el mismo
if(mysqli_num_rows($datos_iguales) > 0){
    echo "<script>
            alert('El correo ingresado ya esta registrado');
            document.location='principal.php'</script>";
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar){
    echo "<script>
    alert('Usted se ha registrado correctamente, Bienvenido!');
    document.location='bienvenido.php'</script>";;
}else{
    echo "<script>
    alert('Su regsitro no pudo ser procesado, intentelo nuevmente por favor.');
    document.location='principal.php'</script>";
}


?>