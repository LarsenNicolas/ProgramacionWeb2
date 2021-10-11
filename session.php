<?php
if(isset($_SESSION['usuario'])){ // esto es para que este permita el acceso a bienvenido si la session esta iniciada, luego lo llamo en la pagina
    echo '<script>
    alert("Debes iniciar sesión");
    window.location = principal.php;
    </script>
    ';
    header("location: principal.php");
    session_destroy();
    die();
}



?>