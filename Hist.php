<?php
$d=$_GET['d'];
$t1=$_GET['t1'];
include 'conn.php';
$req = "select l.num_con,c.date_con,c.heure ,l.num_dent, d.cat_dent,a.nom_acte,l.observation_con from ligne l join consultation c join dent d join acte a 
where l.num_con= c.num_con and l.num_dent= d.num_dent and l.num_acte=a.num_acte and c.idpat=$t1 having l.num_dent=$d ";
$res = mysql_query($req)or die(mysql_error());
if($res)
{
echo "<table>";
echo "<tr>
<th>N Consultation</th>
<th>Date Consultation</th>
<th>Heure Consultation</th>
<th>N Dent</th>
<th>Non Dent</th>
<th>Nom acte</th>
<th>Observation</th>
</tr>";
while($e=mysql_fetch_object($res))
echo"<tr> 
<td class=grid>$e->num_con
<td class=grid>$e->date_con
<td class=grid>$e->heure
<td class=grid>$e->num_dent
<td class=grid>$e->cat_dent
<td class=grid>$e->nom_acte
<td class=grid>$e->observation_con
</tr>";
echo "</table>";
}
?>