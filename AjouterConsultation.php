<?php
include 'conn.php';
$req3="SELECT MAX(num_con) A
FROM consultation";
$res4 = mysql_query($req3)or die(mysql_error());
while($e=mysql_fetch_object($res4))
$num = intval($e->A);
echo $num;
?>
