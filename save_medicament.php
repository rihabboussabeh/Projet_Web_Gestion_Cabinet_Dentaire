<?php

$nom = $_REQUEST['nom'];
$description_med = $_REQUEST['description_med'];
$code_amm = $_REQUEST['code_amm'];
$nature = $_REQUEST['nature'];


include 'conn.php';

$sql = "insert into medicament(nom,description_med,code_amm,nature) values('$nom','$description_med','$code_amm','$nature')";
@mysql_query($sql);
echo json_encode(array(
	'id' => mysql_insert_id(),
	'description_med' => $description_med,
	'code_amm' => $code_amm,
	'nature' => $nature
));

?>