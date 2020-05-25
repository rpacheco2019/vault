<?php

function save_encuesta($id,$motselect,$numbajas){
	try {

		$conn = new PDO('mysql:host=localhost;dbname=mis_contactos','root','');
		$statement = $conn->prepare("SELECT * FROM contactos WHERE con_id=$id");
		$statement->execute();
		$resultados = $statement->fetch();

			if (empty($resultados)) {
				echo "no se encontraron registros con ese ID";

			}

		$nombre = $resultados['con_nombre'];
		$baja = $numbajas ;
		$motivo = $motselect;
		$user = $_SESSION['ses_user'];
		$id2 = $resultados['con_id'];
		$status = "solicitado";

		$conn2 = new PDO('mysql:host=localhost;dbname=mis_contactos','root','');
		$statement2 = $conn2->prepare("INSERT INTO bajas (nombre_item,cantidad_baja,motivo,user,id_item,status) VALUES('$nombre',$baja,'$motivo','$user',$id2,'$status')");
		$statement2->execute();
		
	
	} catch (PDOException $e) {
		echo "Error Try Mysql: ".$e->getMessage();
	}

}//Fin de la funcion save_baja (Guarda el registro en la base de datos para programar su autorización)
?>