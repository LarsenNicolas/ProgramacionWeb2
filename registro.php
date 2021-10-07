<?php
include 'conexion.php';
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(email, contrasena, tipo) 
          VALUES('$email', '$contrasena', '$usuario')";


$datos_iguales = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ");
if(mysqli_num_rows($datos_iguales) > 0){
    echo '<script>
            alert("El correo ingresado ya esta registrado");
            windows.location = "pincipal.php";
            </script>   
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar){
    echo '<script>
    alert("Usted se ha registrado correctamente");
    windows.location = "pincipal.php";
    </script>   
';
}else{
    echo '<script>
    alert("Ha ocurrido un error, intentelo nuvamente!");
    windows.location = "pincipal.php";
    </script>    ';
}


?>