<?php
include'conn.php';
session_start();
if (!isset($_SESSION['login']))
header("location:Authentification.html");

else
{
$l=$_SESSION['login'];
$e=$_POST['loginEmail'];
$n=$_POST['loginPass'];
$req="SELECT * FROM Authe where login='$l' AND pass='$e' ";
$res = mysql_query($req)or die(mysql_error());
if(mysql_num_rows($res)<=0)
header("location:modif_log.html");
else
$req1="update authe set pass='$n' where login='$l' ";
$res1 = mysql_query($req1)or die(mysql_error());
if($res1)
header("location:index.html");
}

?>