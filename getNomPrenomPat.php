 <?php
include 'conn.php';
$req1="SELECT MAX(num_con) A FROM ligne_medicament";
$res1 = mysql_query($req1)or die(mysql_error());
while($e=mysql_fetch_object($res1))
$num = intval($e->A);
$req2="select p.nom_pat,p.prenom_pat from ligne_medicament l join consultation c join patient p on  l.num_con=c.num_con  and p.id=c.idpat  where l.num_con=".$num;
$result = array();
$res2 = mysql_query($req2)or die(mysql_error());
while($e=mysql_fetch_object($res2))
{
array_push($result, $e);
}
echo json_encode($result);
?>