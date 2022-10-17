<?php

include_once 'conexion.php';

$objeto=new conexionBDD();
$conexion=$objeto->conectarBDD();

$consulta="SELECT * FROM clientestienda";

$resultado=$conexion->prepare($consulta);
$resultado->execute();

$data=$resultado->fetchAll(PDO::FETCH_ASSOC);


// echo 





// return  array("Estado" => true, "Data" => $plataforma);

echo json_encode(array('Estado'=>true,'Data'=>$data));

// return json_encode();
$conexion=null;

// print json_encode($data,JSON_UNESCAPED_UNICODE);

?>