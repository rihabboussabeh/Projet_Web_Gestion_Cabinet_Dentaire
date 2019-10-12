<?php

include 'conn.php';
$id = intval($_REQUEST['id']);;
$rs = mysql_query('select nom_pat,prenom_pat,id from patient where id='.$id);
$result = array();
while($row = mysql_fetch_object($rs)){
	array_push($result, $row);
}

echo json_encode($result);

?>