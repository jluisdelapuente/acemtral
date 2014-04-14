<?php

function conectarBD(){
   $link = mysql_connect("localhost","ascadsem_minam","minam25") 
   or die("<br>Problema de Conexion:</b><br /> Error Nro:".
        mysql_errno().": ". mysql_error());

   $selectBD = mysql_select_db("minam", $link);

   if(!$selectBD) {
       die("Problemas para usar la base de datos". mysql_error($link));
   }
   return $link;
}


/*
FUNCTION getCursoxId($idcurso){
	$link = conectarBD();
	$datos = array();
	$QUERY = "SELECT idcurso,nomcurso,ciclo FROM curso WHERE idcurso = ".$idcurso;
	$result = mysql_query($QUERY, $link) OR die('Error en el SQL: ' . mysql_error($link));

	IF (mysql_num_rows($result) > 0) {
			$datos["error"] = "1";
		WHILE($ROW = mysql_fetch_row($result)) {
			$datos["idcurso"] = $ROW[0];
			$datos["nomcurso"] = $ROW[1];
			$datos["ciclo"] = $ROW[2];
		}
	} ELSE {
		$datos["error"] ="0";
	}
	RETURN $datos;
}

function getAlumnoId($idalumno){
	$link = conectarBD();
	$datos = array();
	                 
	$query = "SELECT idalumno, nombre, apellido, correo, telefono, FROM alumno WHERE idalumno = ".$idalumno;
	$result = mysql_query($query, $link) or die('Error en el SQL: ' . mysql_error($link));

	if (mysql_num_rows($result) > 0) {
			$datos["error"] = "1";
		while($row = mysql_fetch_row($result)) {
			$datos["idalumno"] = $row[0];
			$datos["nombre"] = $row[1];
			$datos["apellido"] = $row[3];
			$datos["correo"] = $row[4];
			$datos["telefono"] = $row[5];
		}
	} else {
		$datos["error"] ="0";
	}
	return $datos;
}




*/


?>
