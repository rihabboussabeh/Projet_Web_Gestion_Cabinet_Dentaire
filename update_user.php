<?php
$id = intval($_REQUEST['id']);
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
$sql = "update patient set nom_pat='$nom_pat',prenom_pat='$prenom_pat',date_naissance='$date_naissance',profession='$profession',sexe='$sexe',adresse='$adresse',ville='$ville',tel_domicile='$tel_domicile',tel_portable='$tel_portable' where id=$id";
@mysql_query($sql);
echo json_encode(array(
	'id' => $id,
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