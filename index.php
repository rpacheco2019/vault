<?php

/* Si se ha hecho clic en el boton submit , tratamos de insertar los datos en la base MYSQL */
if ($_POST) {
	
    require ('modelos/modelos.php'); /* se llama al archivo Modelo que contiene las funciones pre-programadas */
    
    /* Cargamos todas las varibles del HTML por POST */
    $nombre = $_POST[];
    $evento = $_POST[];
    $fecha = $_POST[];
    $lugar = $_POST[];
    $invitados = $_POST[];
    $p1 = $_POST[];
    $p2 = $_POST[];
    $p3 = $_POST[];
    $p4 = $_POST[];
    $p5 = $_POST[];

    /* Guardamos el resultado de la funcion para validar el guardado en la BD */
	$validacion = save_encuesta($nombre,$evento,$fecha,$lugar,$invitados,$p1,$p2,$p3,$p4,$p5);
	if (!empty($validacion)) {
		echo "Datos guardados <br />";
		header('Location:index.php');
		
	}else{
		echo "<center><b>El usuario no existe</b></center>";
	}
}


require ('views/login.view.php');

	//echo '<center><a href="sesdestroy.php">Cerrar Sesion</a></center><br />';
	echo '<center><a href="index.php">Regresar al inventario</a></center>';


?>