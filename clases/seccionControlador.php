<?php
include 'seccion.php';
 class seccionControlador extends seccion{ 
	public function guadarDatos($objseccion) {
		$variableSql = "INSERT INTO alumnos.seccion";
		$variablesql .= "(id,nombre,escuela)";
		$variablesql .= "VALUES (";
	     $variablesql .= "'".$objseccion[0]."',";
	    $variablesql .= "'".$objseccion[1]."',";
	    $variablesql .= "'".$objseccion[2]."');";	
  $bandera = mysql_query($variableSql);
        
        if($bandera){
            $msg =" Datos almacenados";
        }else{
            $msg = "Error al almacenar los Datos # de error: ";
            $msg .= mysql_errno();
            $msg .="<br>";
            $msg .=mysql_error();
        }
        
        return $msg;
    }
   
}