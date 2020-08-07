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

foreach ($arrayPaises as $key => $value) {
	//echo $key;
	array_push($paises, $key);
}

//enviar el array paises en formato json
echo json_encode($paises);

?>