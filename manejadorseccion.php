<?php
include './clases/Coneccion.php';

include './clases/seccionControlador.php';
$con = new Coneccion();
$secionA = new seccionControlador();



if ($con->conectar()){
    
    if(isset($_REQUEST['bot'])){
  $secionA ->setId('NULL');
   $secionA ->setNombre($_REQUEST['nombre']);
    $secionA ->setEscuela($_REQUEST['escuela']);
      $datosObj=array($secionA >getId(),
                 $secionA ->getNombre(),
                  $secionA ->getEscuela());
                      
    print $secionA ->guardarDatos($datosObj);
}else{
    print 'No se ha enviado datos ';
    
}
}  else {
    print $con->conectar();
}
