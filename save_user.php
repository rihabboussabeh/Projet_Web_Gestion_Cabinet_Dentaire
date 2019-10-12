<?php

$nom_pat = $_REQUEST['nom_pat'];
$prenom_pat = $_REQUEST['prenom_pat'];
$date_naissance = $_REQUEST['date_naissance'];
$profession = $_REQUEST['profession'];
$sexe = $_REQUEST['sexe'];
$adresse = $_REQUEST['adresse'];
$ville = $_REQUEST['ville'];
$tel_domicile = $_REQUEST['tel_domicile'];
$tel_portable = $_REQUEST['tel_portable'];


include 'conn.php';

$sql = "insert into patient(nom_pat,prenom_pat,date_naissance,profession,sexe,adresse,ville,tel_domicile,tel_portable) values('$nom_pat','$prenom_pat','$date_naissance','$profession','$sexe','$adresse','$ville','$tel_domicile','$tel_portable')";
@mysql_query($sql);
echo json_encode(array(
	'idpat' => mysql_insert_idpat(),
	'nom_pat' => $nom_pat,
	'prenom_pat' => $prenom_pat,
	'date_naissance' => $date_naissance,
'profession' => $profession,
'sexe' => $sexe,
'adresse' => $adresse,
'ville' => $ville,
'tel_domicile' => $tel_domicile,
	'tel_portable' => $tel_portable
));

?>