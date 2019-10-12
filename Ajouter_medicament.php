<html>
<?php
$nom=$_GET['t2'];
$description_med=$_GET['t3'];
$code_amm=$_GET['t4'];
$nature=$_GET['t5'];
$c = mysql_pconnect('127.0.0.1','root','')or die (mysql_error());
$ret = mysql_select_db('c_m')or die (mysql_error());
$req = "insert into medicament(nom,description_med,code_amm,nature) values('$nom','$description_med','$code_amm','$nature')";
$res = mysql_query($req)or die(mysql_error());
if($res)
echo '<script>if(confirm("Patient ajouter avec succes")){
location.href="Fiche_patient.php"
}</script>'; 

else 
echo 'il ya une erreur';
mysql_close();
?>
</html>