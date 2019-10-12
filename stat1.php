<!DOCTYPE html>

<html>
<head>

    <title>Bar Charts</title>

    <link class="include" rel="stylesheet" type="text/css" href="plugin/jquery.jqplot.min.css" />
    <link rel="stylesheet" type="text/css" href="plugin/examples.min.css" />
    <link type="text/css" rel="stylesheet" href="plugin/shCoreDefault.min.css" />
    <link type="text/css" rel="stylesheet" href="plugin/shThemejqPlot.min.css" />
  
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="../excanvas.js"></script><![endif]-->
    <script class="include" type="text/javascript" src="plugin/jquery.min.js"></script>
	   	<link rel="stylesheet" type="text/css" href="plugcla/stylem.css" media="screen" />

	  <?php

include('conn.php');
$anne=date('Y');
echo "<table id='etatt' >";
echo "<tr>
<td>moi</td>
<td>nbre</td>

</tr>";
$l=5;
for($i = 1; $i < 13; ++$i) {  
  
$req = "select count(num_con) a from consultation where extract(year FROM date_con) =$anne  and extract(month FROM date_con) =$i";
$res = mysql_query($req)or die(mysql_error());
if($res)
{

while($e=mysql_fetch_object($res))

echo"<tr> 
<td>$e->a
<td>$i
</tr>";
}}
echo "</table>";
?>
   

</head>
<body>
 <div id="main_container">
	<div class="header">
    	<div id="logo"><a href="index.html"><img src="Image/logo.png" title="" width="162" height="54" border="0" /></a></div>
    
    	<div class="right_header">
        	
            <div class="top_menu">
            <a href="index1.html" class="login" style="position:absolute; left: 1027px; top: 29px;">Acceuil</a>     
			<a href="Fermer_session.php" class="logout" style="position:absolute; left: 922px; top: 29px;">Déconnexion</a>       </div>
			
        </div>
    
    </div>
    <div id="middle_box" >
	<br>
		<h1 style="text-align:center">Statistique de l'année Actuelle</h1>

	
<div id="chart1" style="margin-top:20px; margin-left:20px; width:800px; height:300px;"></div>
  <script class="code" type="text/javascript">
  var table = document.getElementById('etatt');
		var s1 = new Array(12);
        for (var r = 1, n = table.rows.length; r < n; r++) {
			var a=table.rows[r].cells[0].innerHTML.toString().trim();
			s1[r-1]=a;
  
  }
  $(document).ready(function(){
        $.jqplot.config.enablePlugins = true;
        var ticks = ['Janvier', 'Février', 'Mars', 'Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
        
        plot1 = $.jqplot('chart1', [s1], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
            animate: !$.jqplot.use_excanvas,
            seriesDefaults:{
                renderer:$.jqplot.BarRenderer,
                pointLabels: { show: true }
            },
            axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks,
tickOptions: {
                   
				   textColor: '#FFFFFF'
                }					
                },
				 yaxis: {
                              max:30,

               tickOptions: {
				   textColor: '#FFFFFF'
                }}
            },
            highlighter: { show: false }
        });
    
        $('#chart1').bind('jqplotDataClick', 
            function (ev, seriesIndex, pointIndex, data) {
                $('#info1').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
            }
        );
    });
	var element = document.getElementById("etatt");
	while (element.firstChild) {
	  element.removeChild(element.firstChild);
	}
	
	</script>

    <script class="include" type="text/javascript" src="plugin/jquery.jqplot.min.js"></script>
  <script class="include" type="text/javascript" src="plugin/jqplot.barRenderer.min.js"></script>
  <script class="include" type="text/javascript" src="plugin/jqplot.pieRenderer.min.js"></script>
  <script class="include" type="text/javascript" src="plugin/jqplot.categoryAxisRenderer.min.js"></script>
  <script class="include" type="text/javascript" src="plugin/jqplot.pointLabels.min.js"></script>
<br>
    <br>
    <br>
    <br>    <br>
    <br>
    <br>
	    <br>
    <br>

</div>

    

    

     <div id="footer">
     	<div class="copyright">
        <img src="Image/footer_logo.gif"  title="" />
        </div>
        <div class="center_footer">&copy; Cabinet Dentaire 2013.Tous Droits Réservés</div>    	    
    </div>
</div>
</body>


</html>
