<!DOCTYPE html>

<html>
<head>

    <title>Statistique</title>

    <link class="include" rel="stylesheet" type="text/css" href="plugin/jquery.jqplot.min.css" />
    <link rel="stylesheet" type="text/css" href="plugin/examples.min.css" />
    <link type="text/css" rel="stylesheet" href="plugin/shCoreDefault.min.css" />
    <link type="text/css" rel="stylesheet" href="plugin/shThemejqPlot.min.css" />
   <script class="include" type="text/javascript" src="plugin/jquery.min.js"></script>
   	<link rel="stylesheet" type="text/css" href="plugcla/stylem.css" media="screen" />

   
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="../excanvas.js"></script><![endif]-->
     <?php

include('conn.php');
$anne=date('Y');
$anne1=$anne-1;
$anne2=$anne-2;
$anne3=$anne-3;
echo "<table  id='cons1' style='width:5px; height:5px;'>";
echo "<tr>
<td>moi</td>
<td>nbre</td>

</tr>";

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


echo "<table  id='cons2' style='width:5px; height:5px;' >";
echo "<tr>
<td>moi</td>
<td>nbre</td>

</tr>";

for($i = 1; $i < 13; ++$i) {    
$req = "select count(num_con) a from consultation where extract(year FROM date_con) =$anne-1  and extract(month FROM date_con) =$i";
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
echo "<table  id='cons3' style='width:5px; height:5px;' >";
echo "<tr>
<td>moi</td>
<td>nbre</td>

</tr>";

for($i = 1; $i < 13; ++$i) {  
  
$req = "select count(num_con) a from consultation where extract(year FROM date_con) =$anne-2  and extract(month FROM date_con) =$i";
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
echo "<table  id='cons4' style='width:5px; height:5px;'>";
echo "<tr>
<td>moi</td>
<td>nbre</td>

</tr>";

for($i = 1; $i < 13; ++$i) {  
  
$req = "select count(num_con) a from consultation where extract(year FROM date_con) =$anne-3  and extract(month FROM date_con) =$i";
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
echo "<table id='ann' style='width:1px; height:1px;'>";
echo "<tr>
<td>Anne</td>
</tr>";
echo"<tr> 
<td>
$anne
</td>
</tr>";
echo"<tr> 
<td>
$anne1
</td>
</tr>";
echo"<tr> 
<td>
$anne2
</td>
</tr>";
echo"<tr> 
<td>
$anne3
</td>
</tr>";

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
			<a href="Fermer_session.php" class="logout" style="position:absolute; left: 922px; top: 29px;">Déconnexion</a>          </div>
			
        </div>
    
    </div>
    <div id="middle_box" >
		<h1 style="text-align:center">&nbsp;</h1>
		<h1 style="text-align:center">Statistique des Consultations pour les 4 dernières années </h1>
		<style type="text/css">
.jqplot-target {
    margin: 30px;
}
</style>
<div id="chart2" class="plot" ></div>
<script language="javascript" type="text/javascript">
  var table = document.getElementById('cons1');
  var table1 = document.getElementById('cons2');
  var table2 = document.getElementById('cons3');
  var table3 = document.getElementById('cons4');
  var table4=document.getElementById('ann'); 
  var ntext=new Array(4);
      for (var r = 1, n = table4.rows.length; r < n; r++) {
			var a=table4.rows[r].cells[0].innerHTML.toString().substring(0,5);
			ntext[r-1]=a;
  
  }
		var pop2008 = new Array(12);
        for (var r = 1, n = table.rows.length; r < n; r++) {
			var a=table.rows[r].cells[0].innerHTML.toString().trim();
			var b=table.rows[r].cells[1].innerHTML.toString().trim();
			pop2008[r-1]=a;
  
  }
  var pop2000 = new Array(12);
        for (var r = 1, n = table1.rows.length; r < n; r++) {
			var a=table1.rows[r].cells[0].innerHTML.toString().trim();
			var b=table1.rows[r].cells[1].innerHTML.toString().trim();
			pop2000[r-1]=a;
  
  }var pop1990 = new Array(12);
        for (var r = 1, n = table2.rows.length; r < n; r++) {
			var a=table2.rows[r].cells[0].innerHTML.toString().trim();
			var b=table2.rows[r].cells[1].innerHTML.toString().trim();
			pop1990[r-1]=a;
  
  }pop1980 = new Array(12);
        for (var r = 1, n = table3.rows.length; r < n; r++) {
			var a=table3.rows[r].cells[0].innerHTML.toString().trim();
			var b=table3.rows[r].cells[1].innerHTML.toString().trim();
			pop1980[r-1]=a;
  
  }
  

$(document).ready(function(){

    



    ticks = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août","Septembre","Octobre","Novembre","Décembre"];

   
    
   

    plot2 = $.jqplot('chart2',[pop1980, pop1990, pop2000, pop2008],{
       title: 'Statistique des consultations',
       legend: {
           show: true
       },
       seriesDefaults: {
           renderer: $.jqplot.BarRenderer,
           rendererOptions: {
               barPadding: 2
           }
       },
       series: [
          {label: ntext[3]},
          {label: ntext[2]},
          {label: ntext[1]},
          {label: ntext[0]}
       ],
       axes: {
           xaxis: {
              
               renderer: $.jqplot.CategoryAxisRenderer,
               tickRenderer: $.jqplot.CanvasAxisTickRenderer,
               labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
               ticks: ticks,
               tickOptions: {
                   angle: -30,
				   textColor: '#FFFFFF'
                }
           },
           yaxis: {
               tickRenderer: $.jqplot.CanvasAxisTickRenderer,
               max:30,
               tickOptions: {
                   formatString: '%d',
                   angle: -30,
				   textColor: '#FFFFFF'
                }
           }
       }
    });
    
   
        
    
    
    temp = {
        grid: {
            backgroundColor: "#593D2B",
            gridLineColor: '#E8E8E8',
            gridLineWidth: 3
        },
        title: {
            fontFamily: '"Comic Sans MS", cursive',
            fontSize: '18pt',
            textColor: '#FFFFFF'
        },
        seriesStyles: {
            color: "#DBBCAF",
            lineWidth: 8,
            markerOptions: {
                show: false
            }
        },
        axes: {
            xaxis: {
                label: {
                    fontFamily: '"Comic Sans MS", cursive',
                    textColor: '#FFFFFF'
                }
            }
        }
    };
});
function switch2() {
    var th = $('#p2switcher').val();
    plot2.activateTheme(th);
}
	var element = document.getElementById("ann");
	while (element.firstChild) {
	  element.removeChild(element.firstChild);
	}

var element = document.getElementById("cons1");
	while (element.firstChild) {
	  element.removeChild(element.firstChild);
	}
	var element = document.getElementById("cons2");
	while (element.firstChild) {
	  element.removeChild(element.firstChild);
	}
var element = document.getElementById("cons3");
	while (element.firstChild) {
	  element.removeChild(element.firstChild);
	}
	var element = document.getElementById("cons4");
	while (element.firstChild) {
	  element.removeChild(element.firstChild);
	}



</script>

<!-- End example scripts -->

<!-- Don't touch this! -->


    <script class="include" type="text/javascript" src="plugin/jquery.jqplot.min.js"></script>
  
<!-- End Don't touch this! -->

<!-- Additional plugins go here -->
  <script language="javascript" type="text/javascript" src="plugin/jqplot.barRenderer.min.js"></script>
  <script language="javascript" type="text/javascript" src="plugin/jqplot.categoryAxisRenderer.min.js"></script>
  <script language="javascript" type="text/javascript" src="plugin/jqplot.pieRenderer.min.js"></script>
  <script language="javascript" type="text/javascript" src="plugin/jqplot.donutRenderer.min.js"></script>
  <script language="javascript" type="text/javascript" src="plugin/jqplot.highlighter.min.js"></script>
  <script language="javascript" type="text/javascript" src="plugin/jqplot.cursor.min.js"></script>
  <script language="javascript" type="text/javascript" src="plugin/jqplot.funnelRenderer.min.js"></script>
  <script language="javascript" type="text/javascript" src="plugin/jqplot.canvasTextRenderer.min.js"></script>
  <script language="javascript" type="text/javascript" src="plugin/jqplot.canvasAxisTickRenderer.min.js"></script>
  <script language="javascript" type="text/javascript" src="plugin/jqplot.canvasAxisLabelRenderer.min.js"></script>
 <script type="text/javascript" src="example.min.js"></script>
<br><br><br><br>
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
