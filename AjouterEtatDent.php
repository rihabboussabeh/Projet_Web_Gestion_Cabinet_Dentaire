<?php
include 'conn.php';
$code_pat=$_GET['t1'];
$num_dent=$_GET['t2'];
$etat=$_GET['t3']; 
$num_acte=$_GET['num_acte'];
$observation=$_GET['observation'];


$req2 = "delete from etat_dents where (num_dent=$num_dent and code_pat=$code_pat)";
$res2 = mysql_query($req2)or die(mysql_error());

$req1 = "insert into etat_dents(num_dent,code_pat,etat) values($num_dent,$code_pat,'$etat')";
$res1 = mysql_query($req1)or die(mysql_error());


$req3="SELECT MAX(num_con) A FROM consultation";
$res4 = mysql_query($req3)or die(mysql_error());
while($e=mysql_fetch_object($res4))
$num = intval($e->A);

$req4 = "insert into ligne(num_con,num_dent,num_acte,observation_con) values($num,$num_dent,$num_acte,'$observation')";
$res4 = mysql_query($req4)or die(mysql_error());
?>
