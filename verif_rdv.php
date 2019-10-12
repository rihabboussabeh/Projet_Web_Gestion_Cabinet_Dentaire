<?php

include 'conn.php';
$stat = $_REQUEST['start'];;
$rs = mysql_query("select (title) from rendez_vous where rendez_vous.start='".$stat."'");
$result = array();

while($row = mysql_fetch_object($rs)){
	array_push($result, $row);

}

echo json_encode($result);

?>