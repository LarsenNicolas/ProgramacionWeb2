<?php
if(isset($_SESSION['usuario'])){
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