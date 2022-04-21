<?php 
	$destinatario = "masivvomarketingdigital@gmail.com"
    /*correo donde se enviara el formulario contactenos */
    $Nombre = $_POST["Nombre"]
    $Empresa = $_POST["Empresa"]
    $Email = $_POST["Email"]
    $Ciudad = $_POST["Ciudad"]
    $Telefono = $_POST["Telefono"]
    
    $http_response_header = "Enviado desde la pagina de masivo"
    mail($destinatario, $http_response_header)
 ?>