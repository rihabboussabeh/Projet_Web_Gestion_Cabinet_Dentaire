<html>
<?php
$nom=$_GET['t2'];
$prenom=$_GET['t3'];
$date=$_GET['t4'];
$prof=$_GET['t5'];
$sexe=$_GET['r1'];
$adr=$_GET['t6'];
$ville=$_GET['t7'];
$telD=$_GET['t8'];
$telP=$_GET['t9'];
$c = mysql_pconnect('localhost','root','')or die (mysql_error());
$ret = mysql_select_db('c_m')or die (mysql_error());
$req = "insert into patient(nom_pat,prenom_pat,date_naissance,profession,sexe,adresse,ville,tel_domicile,tel_portable) values('$nom','$prenom','$date','$prof','$sexe','$adr','$ville',$telD,$telP)";
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