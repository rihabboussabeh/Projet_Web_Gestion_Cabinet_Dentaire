
<html>
<head>
	

<title>Ordonnance</title>


</head>
<body>
<div  style="width:771px; height:461px; border-color:#000000; border:solid; position:absolute; left: 34px; top: 16px;">
  <h4>
  <span style="position:absolute; left: 600px; top: 11px; width: 167px; height: 54px;">
    Docteur Walid Gargouri<br />
    Médecin Dentiste	</span>
	
	<span style="position:absolute; left: 292px; top: 33px;">
    <h1>Ordonnance</h1>
	</span>


    
    <span style="position:absolute; left: 656px; top: 313px; width: 87px;">Bien à vous <br /> 
    Signature</span>
    
    <span style="position:absolute; left: 8px; top: 399px; width: 386px;"> Adresse:Route de l’Aéroport Km 4 Sfax 3018 Tunisie<br />
    Tél: (216) 74 278 777 / Fax: (216) 74 279139<br /> 
    Email : contact@fsegs.rnu.tn.	</span> 

<span style="position:absolute; left: 9px; top: 11px;">
    <?php 
$date = date("d-M-Y");
echo $date; ?>
 </span>
 <span style="position:absolute; left: 134px; top: 107px;">
 <?php
include 'conn.php';
$req1="SELECT MAX(num_con) A FROM ligne_medicament";
$res1 = mysql_query($req1)or die(mysql_error());
while($e=mysql_fetch_object($res1))
$num = intval($e->A);
$req2="select nom_pat,prenom_pat from patient where id in (select c.idpat id from
consultation c join ligne_medicament l on  l.num_con=c.num_con  where l.num_con=$num)";

$res2 = mysql_query($req2)or die(mysql_error());
echo"<table>";
while($e=mysql_fetch_object($res2))
echo "<tr>
<td>$e->nom_pat
<td>$e->prenom_pat
</tr>";
echo"</table>";
?>

 </span>
 <span style="position:absolute; left: 108px; top: 184px;">
 <?php
include 'conn.php';
$req1="SELECT MAX(num_con) A FROM ligne_medicament";
$res1 = mysql_query($req1)or die(mysql_error());
while($e=mysql_fetch_object($res1))
$num = intval($e->A);
$req = "select m.nom,m.description_med,m.nature from ligne_medicament l join medicament m on l.id_med=m.id where l.num_con=$num";
$res = mysql_query($req)or die(mysql_error());
echo"<table>";
while($e=mysql_fetch_object($res))
echo"<tr>
<td>$e->nom
<td>$e->nature
<td>.......   ........   ........ 
</tr>";
echo"</table>";
?>
 </span></h4>
 

 
  

</div>

</body>

</html>
