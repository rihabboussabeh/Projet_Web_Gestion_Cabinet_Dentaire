<?php
include'conn.php';
$l=$_POST['loginEmail'];
$p=$_POST['loginPass'];
$req="SELECT * FROM Authe where login='$l' AND pass='$p' ";
$res = mysql_query($req)or die(mysql_error());
if(mysql_num_rows($res)<=0)

header("location:Authentification.html");

else
{

if ($l == 'Docteur')
{
header("location:index1.html");
}
else
{
header("location:index2.php");
}
session_start();
$_SESSION['login']=$l;
}
?>