
<?php
$c = mysql_pconnect('localhost','root','')or die (mysql_error());
$ret = mysql_select_db('c_m')or die (mysql_error());
$deb=$_GET['t2'];
$fin=$_GET['t3'];
$titre=$_GET['t4'];
$req = "insert into rendez_vous(start,end,title) values('$deb','$fin','$titre')";
$res = mysql_query($req)or die(mysql_error());

?>
