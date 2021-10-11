
<!DOCTYPE html>
<html>
<head>
<title>GauchoRocket</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tomorrow&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styleprincipal.css">
</head>
<?php
include 'conexion.php';
?>
<body class="w3-container w3-padding" style="background-image: url('assets/img/img1.png')">
<header class="w3-container desplazar w3-padding" style="background-image: url('assets/img/img1.png')">Ingresar</header>

<div>
<form id="form" action="login.php" method="POST" class="topBefore desplazar">

		 <input id="emaillogin" type="text" placeholder="E-MAIL" name="correologin">
		 <input id="messagelogin" name="contrasenalogin" type="password" placeholder="CONTRASEÑA"></input>
         <input id="messagelogin2" name="" type="password" placeholder="REPETIR CONTRASEÑA"></input>
         <input id="submit" type="submit" value="INGRESAR">
  
</form>
</div>
<header class="w3-container desplazar w3-padding" style="background-image: url('assets/img/img1.png')">¿Todavia no estas resgritrado?</header>
<div>
<form id="form" action="registro.php" method="POST" class="topBefore desplazar">
		
		  
		 <input id="email" type="text" placeholder="E-MAIL" name="email">
		 <select name="usuario" >
   		 <option value="administrador">Admiminstrador</option>
    	 <option value="cliente">Cliente</option>
		 </select><br>
		 <input id="messager" name="contrasena" type="password" placeholder="CONTRASEÑA"></input>
         <input id="messager2" name="" type="password" placeholder="REPETIR CONTRASEÑA"></input>
         <input id="submit" type="submit" value="REGISTRAR">
  
</form>
</div>






<!-- END PAGE CONTENT -->
</div>
<footer class="w3-container w3-blue-grey d-flex justify-center">
<p class="w3-opacity"></p>
<p class="">GauchoRocket S.A. &copy; 2021</p>


  
</footer>
</body>
</html>
