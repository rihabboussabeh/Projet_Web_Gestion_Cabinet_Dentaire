<?php
include 'conn.php';
$req1="SELECT MAX(num_con) A FROM consultation";
$res1 = mysql_query($req1)or die(mysql_error());
while($e=mysql_fetch_object($res1))
$num = intval($e->A);
$req = "select m.nom,m.description_med,m.nature from ligne_medicament l join medicament m on l.id_med=m.id where l.num_con=$num";
$res = mysql_query($req)or die(mysql_error());
echo"<table>";
while($e=mysql_fetch_object($res))
echo"<tr>
<td>$e->nom
<td>$e->description_med
<td>$e->nature
</tr>";
echo"</table>";
?>