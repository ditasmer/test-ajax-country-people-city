<?php
//leer file


//crear array 
$arrayPaises = array(
'Francia' => ['París', 60000000],
'Ecuador' => ['Quito', 40000000],
'Gran Bretaña' => ['Londres',70000000],
'Alemania' => ['Berlín',75000000],
'Argentina' => ['Buenos Aires', 65000000]
);

//extraer paises del array
$paises = [];

//Opcion 1: recorrer array y recuperar claves
foreach ($arrayPaises as $key => $value) {
	//echo $key;
	array_push($paises, $key);
}

//Opcion 2: recuperar solo las claves de un array
//$paises = array_keys($arrayPaises)

//enviar el array paises en formato json
echo json_encode($paises);

?>