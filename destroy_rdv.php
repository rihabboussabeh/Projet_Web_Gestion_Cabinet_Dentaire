<?php
include 'conn.php';
$sql = "delete from rendez_vous where SUBSTR(REPLACE(start, 'T', ' '), 1,19)<NOW()";
@mysql_query($sql);
echo json_encode(array('success'=>true));
?>