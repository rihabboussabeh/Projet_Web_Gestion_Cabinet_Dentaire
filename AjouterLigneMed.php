<?php
include 'conn.php';
$res=$_GET['t2'];
$req3="SELECT MAX(num_con) A FROM consultation";
$res4 = mysql_query($req3)or die(mysql_error());
while($e=mysql_fetch_object($res4))
$num = intval($e->A);

$req2 = "insert into ligne_medicament(num_con,id_med) values($num,$res)";

$res5 = mysql_query($req2)or die(mysql_error());
?>