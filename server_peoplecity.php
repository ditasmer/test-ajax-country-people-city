<?php
//crear array 
$arrayPaises = array(
'Francia' => ["capital"=>'París', "poblacion"=>60000000],
'Ecuador' => ["capital"=>'Quito', "poblacion"=>40000000],
'Gran Bretaña' => ["capital"=>'Londres', "poblacion"=>70000000],
'Alemania' => ["capital"=>'Berlín', "poblacion"=>75000000],
'Argentina' => ["capital"=>'Buenos Aires', "poblacion"=>65000000]
);

//recupera pais
$pais = $_POST['pais'];

//recupera datos
$datos = $arrayPaises[$pais];

//enviar el array paises en formato json
echo json_encode($datos);

?>