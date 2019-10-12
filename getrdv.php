<?php




include 'conn.php';
$rs = mysql_query('SELECT * from rendez_vous');

 $results = array();
    while($row = mysql_fetch_assoc($rs))
    {
       $results[] = array(
         
'id' => $row['id'],
          'start' => $row['start'],
          'end' => $row['end'],
          'title' => $row['title']
       );
    }


    echo json_encode($results);

?>