<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>


<link rel="stylesheet" type="text/css" href="plugin/easyui.css">
<link rel="stylesheet" type="text/css" href="plugin/icon.css"> 
<link rel="stylesheet" type="text/css" href="plugin/demo.css">
<link rel="stylesheet" href="plugin/jquery.tooltip.css" />
<link rel="stylesheet" href="plugin/screen.css" />  
<link rel="stylesheet" type="text/css" href="plugin/style.css" media="all"/>
<script type="text/javascript"src="plugin/jquery.dimensions.js" ></script>
<script type="text/javascript" src="plugin/jquery.js" ></script>
<script type="text/javascript" src="plugin/jquery.bgiframe.js" ></script>
<script type="text/javascript" src="plugin/jquery-1.8.0.min.js"></script> 
<script type="text/javascript" src="plugin/jquery.easyui.min.js"></script>
<script type="text/javascript" src="plugin/jquery.tooltip.js" ></script>
<script type="text/javascript" src="plugin/jquery.edatagrid.js"></script>
<link rel="stylesheet" type="text/css" href="plugcla/stylem.css" media="screen" />

<title>Consultation</title>
<style>
th{
	font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica,
	sans-serif;
	color: #6D929B;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background:#CAE8EA url(images/bg_header.jpg) no-repeat;}
	
td.grid {
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	background: #FFF3F3;
	padding: 6px 6px 6px 12px;
	color: #6D929B;
}
</style>
<script> window.onload = function () { affichetab(); $('#w').window('close');}</script>
<script>
	
		
		$(function(){
			$('#tt').edatagrid({
			    rownumbers:true,
				autoRowHeight:false,
				checkOnSelect:false,
				selectOnCheck:false,
				onCheck:onCheck,
				onUncheck:onUncheck,
				onLoadSuccess:onLoadSuccess,
				title:'Liste des médicaments',
				width:700,
				height:250,
				
				idField:'id',
				url:'get_medicament.php',

				columns:[[
				     {field:'CK',checkbox:true,
					 },
					{field:'nom',title:'Nom',width:114, 
	
					},
					{field:'description_med',title:'Description',width:100,
		
       
      
					},
					{field:'code_amm',title:'Code AMM',
				},
					{field:'nature',title:'Nature',width:80,
						
					
				
     
	
	
		
		}]],	
				
			});
		});
		
	</script> 
	
		<script>
		var checkedRows = [];
		
		function onCheck(index,row){
			
for(var i=0; i<checkedRows.length; i++){
				if (checkedRows[i] == row.id){return}
			}
			checkedRows.push(row.id);
			
}

		
		function onUncheck(index,row){
			for(var i=0; i<checkedRows.length; i++){
				if (checkedRows[i] == row.id){
					checkedRows.splice(i,1);
				}
			}
		}
		function onLoadSuccess(data){
			var tt = $(this);
			var rows = data.rows;
			for(var i=0; i<rows.length; i++){
				var index = i;
				var row = rows[i];
				
(function(){
					for(var i=0; i<checkedRows.length; i++){
						if (checkedRows[i] == row.id){
							tt.edatagrid('checkRow', index);
							return;
						}
					}
				});
				
			}
		}
		
	</script>
<script>function impression() {
window.document.write("<iframe height='0px' src='Ordonnance.php' style='visibility: hidden'></iframe>");
    window.frames[0].print();
  }</script>
<script>
function ajouterLigne_d()
{
for(var i=0; i<checkedRows.length; i++)
{
var t2 = checkedRows[i] ;

 if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtuserrkr").innerHTML = xmlhttp.responseText;
        }
    
	}
    xmlhttp.open("GET", "AjouterLigneMed.php?t2="+t2,true);
    xmlhttp.send();
}
}

</script>
<script>
function historique()
{
 var d = window.document.fm.num_dent.value;
 var t1 = window.document.fm.t1.value;
 if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtuserrr").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "Hist.php?d=" +d + "&t1="+t1,true);
    xmlhttp.send();
	$('#w').window('open');
	}
</script>
<script>
var boll=false;
function ajouterConsultation(boll)
{
if (boo=false)
<?php
include 'conn.php';
$code_pat=$_GET['id_pat'];
$date = date('Y-m-d');
$heure = date('H:i'); 
$req = "insert into consultation(idpat,date_con,heure) values($code_pat,'$date','$heure')";
$res = mysql_query($req)or die(mysql_error());
?>
boll=true;
}
</script>
<script type="text/javascript">
$(function() {
$("#den11,#den12,#den13,#den14,#den15,#den16,#den17,#den18,#den21,#den22,#den23,#den24,#den25,#den26,#den27,#den28,#den31,#den32,#den33,#den34,#den35,#den36,#den37,#den38,#den41,#den42,#den43,#den44,#den45,#den46,#den47,#den48").tooltip({
	track: true,
	delay: 0,
	showURL: false,
	fixPNG: true,
	showBody: " - ",
	extraClass: "pretty fancy",
	top: -15,
	left: 5
});

$('#pretty').tooltip({
	track: true,
	delay: 0,
	showURL: false,
	showBody: " - ",
	extraClass: "pretty",
	fixPNG: true,
	left: -120
});



});

</script>
<script>
function donne_dent(num,desc){
window.document.fm.num_dent.value=num;
window.document.fm.nom_dent.value=desc;
} 
</script>

 <script>
function Hide (addr) { document.getElementById(addr).style.visibility = "hidden";	}
function Show (addr) { document.getElementById(addr).style.visibility = "visible" ;	}
function affichage(a,b){
for(i=11;i<19;i++)
{

var ch=i.toString();
if(ch==a)
{if(b=="j")
  {Show (ch.concat("j"));
   Hide(ch.concat("v"));
   Hide(ch.concat("r"));
   Hide(ch.concat("b"));
   Hide(ch.concat("t"));
   
  }
  else if(b=="v")
  {
  Show (ch.concat("v"));
   Hide(ch.concat("j"));
   Hide(ch.concat("r"));
   Hide(ch.concat("b"));
   Hide(ch.concat("t"));
  }
   else if(b=="r")
  {
  Show (ch.concat("r"));
   Hide(ch.concat("j"));
   Hide(ch.concat("v"));
   Hide(ch.concat("b"));
   Hide(ch.concat("t"));
  }
   else if(b=="t")
  {
  Show (ch.concat("t"));
   Hide(ch.concat("j"));
   Hide(ch.concat("v"));
   Hide(ch.concat("b"));
   Hide(ch.concat("r"));
  }

}
}
for(i=31;i<39;i++)
{

var ch=i.toString();
if(ch==a)
{if(b=="j")
  {Show (ch.concat("j"));
   Hide(ch.concat("v"));
   Hide(ch.concat("r"));
   Hide(ch.concat("b"));
    Hide(ch.concat("t"));
   
  }
  else if(b=="v")
  {
  Show (ch.concat("v"));
   Hide(ch.concat("j"));
   Hide(ch.concat("r"));
   Hide(ch.concat("b"));
   Hide(ch.concat("t"));
  }
   else if(b=="r")
  {
  Show (ch.concat("r"));
   Hide(ch.concat("j"));
   Hide(ch.concat("v"));
   Hide(ch.concat("b"));
   Hide(ch.concat("t"));
  }
 else if(b=="t")
  {
  Show (ch.concat("t"));
   Hide(ch.concat("j"));
   Hide(ch.concat("v"));
   Hide(ch.concat("b"));
   Hide(ch.concat("r"));
  }
}
}
for(i=21;i<29;i++)
{

var ch=i.toString();
if(ch==a)
{if(b=="j")
  {Show (ch.concat("j"));
   Hide(ch.concat("v"));
   Hide(ch.concat("r"));
   Hide(ch.concat("b"));
   Hide(ch.concat("t"));
   
  }
  else if(b=="v")
  {
  Show (ch.concat("v"));
   Hide(ch.concat("j"));
   Hide(ch.concat("r"));
   Hide(ch.concat("b"));
   Hide(ch.concat("t"));
  }
   else if(b=="r")
  {
  Show (ch.concat("r"));
   Hide(ch.concat("j"));
   Hide(ch.concat("v"));
   Hide(ch.concat("b"));
   Hide(ch.concat("t"));
  }
    else if(b=="t")
  {
  Show (ch.concat("t"));
   Hide(ch.concat("j"));
   Hide(ch.concat("v"));
   Hide(ch.concat("b"));
   Hide(ch.concat("r"));
  }
}
}
for(i=41;i<49;i++)
{

var ch=i.toString();
if(ch==a)
{if(b=="j")
  {Show (ch.concat("j"));
   Hide(ch.concat("v"));
   Hide(ch.concat("r"));
   Hide(ch.concat("b"));
   Hide(ch.concat("t"));
   
  }
  else if(b=="v")
  {
  Show (ch.concat("v"));
   Hide(ch.concat("j"));
   Hide(ch.concat("r"));
   Hide(ch.concat("b"));
   Hide(ch.concat("t"));
  }
   else if(b=="r")
  {
  Show (ch.concat("r"));
   Hide(ch.concat("j"));
   Hide(ch.concat("v"));
   Hide(ch.concat("b"));
   Hide(ch.concat("t"));
  }
   else if(b=="t")
  {
  Show (ch.concat("t"));
   Hide(ch.concat("j"));
   Hide(ch.concat("v"));
   Hide(ch.concat("b"));
   Hide(ch.concat("r"));
  }
}
}
}
function affichetab() {

        var table = document.getElementById('etatt');
		
        for (var r = 1, n = table.rows.length; r < n; r++) {
			var a=table.rows[r].cells[0].innerHTML.toString().substring(0,2);
			var b=table.rows[r].cells[1].innerHTML.toString().substring(0,1);
			affichage(a,b);
        }
		
    } 


</script>

</head>

<body onclick="$('#w').window('close')"> 
<div id="main_container">

<div class="header">
    	<div id="logo"><a href="index.html"><img src="Image/logo.png" alt="" title="" width="162" height="54" border="0" /></a></div>
    
    	<div class="right_header">
        	
            <div class="top_menu">
            <a href="index1.html" class="login" style="position:absolute; left: 1027px; top: 29px;">Acceuil</a>   
			<a href="#" class="logout" style="position:absolute; left: 922px; top: 29px;">Déconnexion</a>         </div>
			
        </div>
    
  </div>
   <div id="middle_box"> 
<br>
	<h1 style="text-align:center">Consultation</h1>
   
<div id="dent"  style="position: absolute; left: 750px; top: 420px;" >
<div id="den11" onclick="donne_dent('11','Incisive centrale');"  ondblclick="historique()" title="Dent numéro 11 - Incisive centrale" >
<span style="position: absolute; left: 121px; top: -264px;"  > <img src='Image/dent/dentjaune/11.png' width="42"  id="11j"  /></span>
<span style="position: absolute; left: 121px; top: -264px;" > <img src='Image/dent/dentvert/11.png' width="42"  id="11v"/></span>
<span style="position: absolute; left: 121px; top: -264px;"  > <img src='Image/dent/dentrouge/11.png' width="42"  id="11r"/></span>
<span style="position: absolute; left: 121px; top: -264px;" > <img src='Image/dent/denttransparent/11.png' width="42"  id="11t" /></span>
<span style="position: absolute; left: 121px; top: -264px;" > <img src='Image/dent/dentblanc/11.png' width="42"  id="11b" /></span>
</div>
<div id="den12" title="Dent numéro 12 - Incisive latérale" onclick="donne_dent('12','Incisive latérale');"  ondblclick="historique()">
<span style="position: absolute; left: 85px; top: -254px;"> <img src='Image/dent/dentjaune/12.png' width="42"  id="12j"/></span>
<span style="position: absolute; left: 85px; top: -254px;"> <img src='Image/dent/dentrouge/12.png' width="42"  id="12r"/></span>
<span style="position: absolute; left: 85px; top: -254px;"> <img src='Image/dent/dentvert/12.png' width="42"  id="12v"/></span>
<span style="position: absolute; left: 85px; top: -254px;"> <img src='Image/dent/denttransparent/12.png' width="42"  id="12t"/></span>
<span style="position: absolute; left: 85px; top: -254px;"> <img src='Image/dent/dentblanc/12.png' width="42"  id="12b"/></span>
</div>
<div id="den13" title="Dent numéro 13 - Canine"  onclick="donne_dent('13','Canine');"  ondblclick="historique()">
<span style="position: absolute; left: 62px; top: -235px;"> <img src='Image/dent/dentrouge/13.png' width="42"  id="13r"/></span>
<span style="position: absolute; left: 62px; top: -235px;"> <img src='Image/dent/dentvert/13.png' width="42"  id="13v"/></span>
<span style="position: absolute; left: 62px; top: -235px;"> <img src='Image/dent/dentjaune/13.png' width="42"  id="13j"/></span>
<span style="position: absolute; left: 62px; top: -235px;" > <img src='Image/dent/denttransparent/13.png' width="42"  id="13t" /></span>
<span style="position: absolute; left: 62px; top: -235px;"> <img src='Image/dent/dentblanc/13.png' width="42"  id="13b"/></span>
</div>
<div id="den14" title="Dent numéro 14 - Première prémolaire" onclick="donne_dent('14','Première prémolaire');"  ondblclick="historique()">
<span style="position: absolute; left: 46px; top: -194px;"> <img src='Image/dent/dentjaune/14.png' width="42"  id="14j"/></span>
<span style="position: absolute; left: 46px; top: -194px;"> <img src='Image/dent/dentvert/14.png' width="42"  id="14v"/></span>
<span style="position: absolute; left: 46px; top: -194px;"> <img src='Image/dent/dentrouge/14.png' width="42"  id="14r"/></span>
<span style="position: absolute; left: 46px; top: -194px;" > <img src='Image/dent/denttransparent/14.png' width="42"  id="14t" /></span>
<span style="position: absolute; left: 46px; top: -194px;"> <img src='Image/dent/dentblanc/14.png' width="42"  id="14b"/></span>
</div>
<div id="den15" title="Dent numéro 15 - Deuxième prémolaire" onclick="donne_dent('15','Deuxième prémolaire');"  ondblclick="historique()">
<span style="position: absolute; left: 24px; top: -164px;" > <img src='Image/dent/dentrouge/15.png' width="42"  id="15r" /></span>
<span style="position: absolute; left: 24px; top: -164px;" > <img src='Image/dent/dentvert/15.png' width="42"  id="15v" /></span>
<span style="position: absolute; left: 24px; top: -164px;" > <img src='Image/dent/dentjaune/15.png' width="42"  id="15j" /></span>
<span style="position: absolute; left: 24px; top: -164px;" > <img src='Image/dent/denttransparent/15.png' width="42"  id="15t" /></span>
<span style="position: absolute; left: 24px; top: -164px;" > <img src='Image/dent/dentblanc/15.png' width="42"  id="15b" /></span>
</div>
<div id="den16" title="Dent numéro 16 - Première molaire" onclick="donne_dent('16','Première molaire');"  ondblclick="historique()">
<span style="position: absolute; left: 14px; top: -128px;" > <img src='Image/dent/dentvert/16.png' width="42"  id="16v" /></span>
<span style="position: absolute; left: 14px; top: -128px;" > <img src='Image/dent/dentjaune/16.png' width="42"  id="16j" /></span>
<span style="position: absolute; left: 14px; top: -128px;" > <img src='Image/dent/denttransparent/16.png' width="42"  id="16t" /></span>
<span style="position: absolute; left: 14px; top: -128px;" > <img src='Image/dent/dentrouge/16.png' width="42"  id="16r" /></span>
<span style="position: absolute; left: 14px; top: -128px;" > <img src='Image/dent/dentblanc/16.png' width="42"  id="16b" /></span>
</div>
<div id="den17" title="Dent numéro 17 - Deuxième molaire" onclick="donne_dent('17','Deuxième molaire');"  ondblclick="historique()">
<span style="position: absolute; left: 6px; top: -92px;" > <img src='Image/dent/dentvert/17.png' width="42"  id="17v" ></span>
<span style="position: absolute; left: 6px; top: -92px;" > <img src='Image/dent/dentjaune/17.png' width="42"  id="17j" ></span>
<span style="position: absolute; left: 6px; top: -92px;" > <img src='Image/dent/dentrouge/17.png' width="42"  id="17r" ></span>
<span style="position: absolute; left: 6px; top: -92px;" > <img src='Image/dent/denttransparent/17.png' width="42"  id="17t" ></span>
<span style="position: absolute; left: 6px; top: -92px;" > <img src='Image/dent/dentblanc/17.png' width="42"  id="17b" ></span>
</div>
<div id="den18" title="Dent numéro 18 - Troisième molaire" onclick="donne_dent('18','Troisième molaire');"  ondblclick="historique()">
<span style="position: absolute; left: 5px; top: -57px;" > <img src='Image/dent/dentvert/18.png' width="42"  id="18v" /></span>
<span style="position: absolute; left: 5px; top: -57px;" > <img src='Image/dent/dentrouge/18.png' width="42"  id="18r" /></span>
<span style="position: absolute; left: 5px; top: -57px;" > <img src='Image/dent/dentjaune/18.png' width="42"  id="18j" /></span>
<span style="position: absolute; left: 5px; top: -57px;" > <img src='Image/dent/denttransparent/18.png' width="42"  id="18t" /></span>
<span style="position: absolute; left: 5px; top: -57px;" > <img src='Image/dent/dentblanc/18.png' width="42"  id="18b" /></span>
</div>
<div id="den21" title="Dent numéro 21 - Incisive centrale" onclick="donne_dent('21','Incisive centrale');"  ondblclick="historique()">
<span style="position: absolute; left: 162px; top: -265px;"> <img src='Image/dent/dentvert/21.png' width="42"  id="21v" /></span>
<span style="position: absolute; left: 162px; top: -265px;"> <img src='Image/dent/dentrouge/21.png' width="42"  id="21r" /></span>
<span style="position: absolute; left: 162px; top: -265px;"> <img src='Image/dent/dentjaune/21.png' width="42"  id="21j" /></span>
<span style="position: absolute; left: 162px; top: -265px;"> <img src='Image/dent/denttransparent/21.png' width="42"  id="21t" /></span>
<span style="position: absolute; left: 162px; top: -265px;"> <img src='Image/dent/dentblanc/21.png' width="42"  id="21b" /></span>
</div>
<div id="den22" title="Dent numéro 22 - Incisive latérale" onclick="donne_dent('22','Incisive latérale');"  ondblclick="historique()">
<span style="position: absolute; left: 201px; top: -256px;" > <img src='Image/dent/dentvert/22.png' width="42"  id="22v"/></span>
<span style="position: absolute; left: 201px; top: -256px;" > <img src='Image/dent/dentrouge/22.png' width="42"  id="22r"/></span>
<span style="position: absolute; left: 201px; top: -256px;" > <img src='Image/dent/dentjaune/22.png' width="42"  id="22j"/></span>
<span style="position: absolute; left: 201px; top: -256px;" > <img src='Image/dent/denttransparent/22.png' width="42"  id="22t"/></span>
<span style="position: absolute; left: 201px; top: -256px;" > <img src='Image/dent/dentblanc/22.png' width="42"  id="22b"/></span>
</div>
<div id="den23" title="Dent numéro 23 - Canine" onclick="donne_dent('23','Canine');"  ondblclick="historique()">
<span style="position: absolute; left: 224px; top: -227px;" > <img src='Image/dent/dentvert/23.png' width="42"  id="23v" /></span>
<span style="position: absolute; left: 224px; top: -227px;" > <img src='Image/dent/dentrouge/23.png' width="42"  id="23r" /></span>
<span style="position: absolute; left: 224px; top: -227px;" > <img src='Image/dent/dentjaune/23.png' width="42"  id="23j" /></span>
<span style="position: absolute; left: 224px; top: -227px;" > <img src='Image/dent/denttransparent/23.png' width="42"  id="23t" /></span>
<span style="position: absolute; left: 224px; top: -227px;" > <img src='Image/dent/dentblanc/23.png' width="42"  id="23b" /></span>
</div>
<div id="den24" title="Dent numéro 24 - Première prémolaire" onclick="donne_dent('24','Première prémolaire');"  ondblclick="historique()">
<span style="position: absolute; left: 247px; top: -204px;"> <img src='Image/dent/dentvert/24.png' width="42"  id="24v"/></span>
<span style="position: absolute; left: 247px; top: -204px;"> <img src='Image/dent/dentrouge/24.png' width="42"  id="24r"/></span>
<span style="position: absolute; left: 247px; top: -204px;"> <img src='Image/dent/dentjaune/24.png' width="42"  id="24j"/></span>
<span style="position: absolute; left: 247px; top: -204px;"> <img src='Image/dent/denttransparent/24.png' width="42"  id="24t"/></span>
<span style="position: absolute; left: 247px; top: -204px;"> <img src='Image/dent/dentblanc/24.png' width="42"  id="24b"/></span>
</div>
<div id="den25" title="Dent numéro 25 - Deuxième prémolaire"  onclick="donne_dent('25','Deuxième prémolaire');"  ondblclick="historique()">
<span style="position: absolute; left: 267px; top: -177px;" > <img src='Image/dent/dentvert/25.png' width="42"  id="25v"/></span>
<span style="position: absolute; left: 267px; top: -177px;" > <img src='Image/dent/dentrouge/25.png' width="42"  id="25r"/></span>
<span style="position: absolute; left: 267px; top: -177px;" > <img src='Image/dent/dentjaune/25.png' width="42"  id="25j"/></span>
<span style="position: absolute; left: 267px; top: -177px;" > <img src='Image/dent/denttransparent/25.png' width="42"  id="25t"/></span>
<span style="position: absolute; left: 267px; top: -177px;" > <img src='Image/dent/dentblanc/25.png' width="42"  id="25b"/></span>
</div>
<div id="den26" title="Dent numéro 26 - Première molaire" onclick="donne_dent('26','Première molaire');"  ondblclick="historique()">
<span style="position: absolute; left: 283px; top: -146px;" > <img src='Image/dent/dentvert/26.png' width="42"  id="26v" /></span>
<span style="position: absolute; left: 283px; top: -146px;" > <img src='Image/dent/dentrouge/26.png' width="42"  id="26r" /></span>
<span style="position: absolute; left: 283px; top: -146px;" > <img src='Image/dent/dentjaune/26.png' width="42"  id="26j" /></span>
<span style="position: absolute; left: 283px; top: -146px;" > <img src='Image/dent/denttransparent/26.png' width="42"  id="26t" /></span>
<span style="position: absolute; left: 283px; top: -146px;" > <img src='Image/dent/dentblanc/26.png' width="42"  id="26b" /></span>
</div>
<div id="den27" title="Dent numéro 27 - Deuxième molaire"  onclick="donne_dent('27','Deuxième molaire');"  ondblclick="historique()">
<span style="position: absolute; left: 294px; top: -109px;"> <img src='Image/dent/dentvert/27.png' width="42"  id="27v"/></span>
<span style="position: absolute; left: 294px; top: -109px;"> <img src='Image/dent/dentrouge/27.png' width="42"  id="27r"/></span>
<span style="position: absolute; left: 294px; top: -109px;"> <img src='Image/dent/dentjaune/27.png' width="42"  id="27j"/></span>
<span style="position: absolute; left: 294px; top: -109px;"> <img src='Image/dent/denttransparent/27.png' width="42"  id="27t"/></span>
<span style="position: absolute; left: 294px; top: -109px;"> <img src='Image/dent/dentblanc/27.png' width="42"  id="27b"/></span>
</div>
<div id="den28" title="Dent numéro 28 - Troisième molaire" onclick="donne_dent('28','Troisième molaire');"  ondblclick="historique()">
<span style="position: absolute; left: 295px; top: -70px;"> <img src='Image/dent/dentvert/28.png' width="42" id="28v"/></span>
<span style="position: absolute; left: 295px; top: -70px;"> <img src='Image/dent/dentrouge/28.png' width="42" id="28r"/></span>
<span style="position: absolute; left: 295px; top: -70px;"> <img src='Image/dent/dentjaune/28.png' width="42" id="28j"/></span>
<span style="position: absolute; left: 295px; top: -70px;"> <img src='Image/dent/denttransparent/28.png' width="42" id="28t"/></span>
<span style="position: absolute; left: 295px; top: -70px;"> <img src='Image/dent/dentblanc/28.png' width="42" id="28b"/></span>
</div>


<div id="den31" onclick="donne_dent('31','Incisive centrale');" title="Dent numéro 31 - Incisive centrale"  ondblclick="historique()">
<span style="position: absolute; left: 169px; top: 214px;"><img src="Image/dent/dentvert/31.png" width="38" id="31v"/></span>
<span style="position: absolute; left: 169px; top: 214px;"><img src="Image/dent/dentrouge/31.png" width="38" id="31r"/></span>
<span style="position: absolute; left: 169px; top: 214px;"><img src="Image/dent/dentjaune/31.png" width="38" id="31j"/></span>
<span style="position: absolute; left: 169px; top: 214px;"><img src="Image/dent/denttransparent/31.png" width="38" id="31t"/></span>
<span style="position: absolute; left: 169px; top: 214px;" ><img src="Image/dent/dentblanc/31.png" width="38" id="31b" /></span>
</div>
<div id="den32" onclick="donne_dent('32','Incisive latérale');" title="Dent numéro 32 - Incisive latérale"   ondblclick="historique()">
<span style="position: absolute; left: 204px; top: 208px;"><img src="Image/dent/dentvert/32.png" width="38" id="32v"/></span>
<span style="position: absolute; left: 204px; top: 208px;"><img src="Image/dent/dentrouge/32.png" width="38" id="32r"/></span>
<span style="position: absolute; left: 204px; top: 208px;"><img src="Image/dent/dentjaune/32.png" width="38" id="32j"/></span>
<span style="position: absolute; left: 204px; top: 208px;"><img src="Image/dent/denttransparent/32.png" width="38" id="32t"/></span>
<span style="position: absolute; left: 204px; top: 208px;"><img src="Image/dent/dentblanc/32.png" width="38" id="32b" /></span>
</div>
<div id="den33" onclick="donne_dent('33','Canine');"  title="Dent numéro 33 - Canine"  ondblclick="historique()">
<span style="position: absolute; left: 229px; top: 194px;"><img src="Image/dent/dentvert/33.png" width="38" id="33v" /></span>
<span style="position: absolute; left: 229px; top: 194px;"><img src="Image/dent/dentrouge/33.png" width="38" id="33r" /></span>
<span style="position: absolute; left: 229px; top: 194px;"><img src="Image/dent/dentjaune/33.png" width="38" id="33j" /></span>
<span style="position: absolute; left: 229px; top: 194px;"><img src="Image/dent/denttransparent/33.png" width="38" id="33t" /></span>
<span style="position: absolute; left: 229px; top: 194px;"><img src="Image/dent/dentblanc/33.png" width="38" id="33b" /></span>
</div>
<div id="den34" onclick="donne_dent('34','Première prémolaire');" title="Dent numéro 34 - Première prémolaire"   ondblclick="historique()">
<span style="position: absolute; left: 253px; top: 165px;"><img src="Image/dent/dentvert/34.png" width="38" id="34v" /></span>
<span style="position: absolute; left: 253px; top: 165px;"><img src="Image/dent/dentrouge/34.png" width="38" id="34r" /></span>
<span style="position: absolute; left: 253px; top: 165px;"><img src="Image/dent/dentjaune/34.png" width="38" id="34j" /></span>
<span style="position: absolute; left: 253px; top: 165px;"><img src="Image/dent/denttransparent/34.png" width="38" id="34t" /></span>
<span style="position: absolute; left: 253px; top: 165px;"><img src="Image/dent/dentblanc/34.png" width="38" id="34b" /></span>
</div>
<div id="den35" onclick="donne_dent('35','Deuxième prémolaire');" title="Dent numéro 35 - Deuxième prémolaire"  ondblclick="historique()">
<span style="position: absolute; left: 273px; top: 132px;"><img src="Image/dent/dentvert/35.png" width="38" id="35v"/></span>
<span style="position: absolute; left: 273px; top: 132px;"><img src="Image/dent/dentrouge/35.png" width="38" id="35r"/></span>
<span style="position: absolute; left: 273px; top: 132px;"><img src="Image/dent/dentjaune/35.png" width="38" id="35j"/></span>
<span style="position: absolute; left: 273px; top: 132px;"><img src="Image/dent/denttransparent/35.png" width="38" id="35t"/></span>
<span style="position: absolute; left: 273px; top: 132px;"><img src="Image/dent/dentblanc/35.png" width="38" id="35b" /></span>
</div>
<div id="den36" onclick="donne_dent('36','Première molaire');" title="Dent numéro 36 - Première molaire"   ondblclick="historique()">
<span style="position: absolute; left: 289px; top: 96px;"><img src="Image/dent/dentvert/36.png" width="38" id="36v"/></span>
<span style="position: absolute; left: 289px; top: 96px;"><img src="Image/dent/dentrouge/36.png" width="38" id="36r"/></span>
<span style="position: absolute; left: 289px; top: 96px;"><img src="Image/dent/dentjaune/36.png" width="38" id="36j"/></span>
<span style="position: absolute; left: 289px; top: 96px;"><img src="Image/dent/denttransparent/36.png" width="38" id="36t"/></span>
<span style="position: absolute; left: 289px; top: 96px;" ><img src="Image/dent/dentblanc/36.png" width="38" id="36b" /></span>
</div>
<div id="den37" onclick="donne_dent('37','Deuxième molaire');" title="Dent numéro 37 - Deuxième molaire"   ondblclick="$historique()">
<span style="position: absolute; left: 293px; top: 58px;"><img src="Image/dent/dentvert/37.png" width="38" id="37v"/></span>
<span style="position: absolute; left: 293px; top: 58px;"><img src="Image/dent/dentrouge/37.png" width="38" id="37r"/></span>
<span style="position: absolute; left: 293px; top: 58px;"><img src="Image/dent/dentjaune/37.png" width="38" id="37j"/></span>
<span style="position: absolute; left: 293px; top: 58px;"><img src="Image/dent/denttransparent/37.png" width="38" id="37t"/></span>
<span style="position: absolute; left: 293px; top: 58px;" ><img src="Image/dent/dentblanc/37.png" width="38" id="37b" /></span>
</div>
<div id="den38" onclick="donne_dent('38','Troisième molaire');" title="Dent numéro 38 - Troisième molaire"   ondblclick="historique()">
<span style="position: absolute; left: 293px; top: 19px;"><img src="Image/dent/dentvert/38.png"  width="38" id="38v" /></span>
<span style="position: absolute; left: 293px; top: 19px;"><img src="Image/dent/dentrouge/38.png"  width="38" id="38r"/></span>
<span style="position: absolute; left: 293px; top: 19px;"><img src="Image/dent/dentjaune/38.png"  width="38" id="38j"/></span>
<span style="position: absolute; left: 293px; top: 19px;"><img src="Image/dent/denttransparent/38.png"  width="38" id="38t"/></span>
<span style="position: absolute; left: 293px; top: 19px;"><img src="Image/dent/dentblanc/38.png"  width="38" id="38b" /></span>
</div>

<div id="den41" onclick="donne_dent('41','Incisive centrale');" title="Dent numéro 41 - Incisive centrale"  ondblclick="$historique()">
<span style="position: absolute; left: 133px; top: 216px;"><img src="Image/dent/dentvert/41.png" width="38" id="41v" /></span>
<span style="position: absolute; left: 133px; top: 216px;"><img src="Image/dent/dentrouge/41.png" width="38" id="41r"/></span>
<span style="position: absolute; left: 133px; top: 216px;"><img src="Image/dent/dentjaune/41.png" width="38" id="41j"/></span>
<span style="position: absolute; left: 133px; top: 216px;"><img src="Image/dent/denttransparent/41.png" width="38" id="41t"/></span>
<span style="position: absolute; left: 133px; top: 216px;"><img src="Image/dent/dentblanc/41.png" width="38" id="41b" /></span>
</div>
<div id="den42" onclick="donne_dent('42','Incisive latérale');" title="Dent numéro 42 - Incisive latérale"  ondblclick="historique()">
<span style="position: absolute; left: 97px; top: 206px;"><img src="Image/dent/dentvert/42.png" width="38" id="42v"/></span>
<span style="position: absolute; left: 97px; top: 206px;"><img src="Image/dent/dentrouge/42.png" width="38" id="42r"/></span>
<span style="position: absolute; left: 97px; top: 206px;"><img src="Image/dent/dentjaune/42.png" width="38" id="42j"/></span>
<span style="position: absolute; left: 97px; top: 206px;"><img src="Image/dent/denttransparent/42.png" width="38" id="42t"/></span>
<span style="position: absolute; left: 97px; top: 206px;"><img src="Image/dent/dentblanc/42.png" width="38" id="42b" /></span>
</div>
<div id="den43" onclick="donne_dent('43','Canine');"  title="Dent numéro 43 - Canine"   ondblclick="$('#w').window('open')">
<span style="position: absolute; left: 71px; top: 193px;"><img src="Image/dent/dentvert/43.png" width="38" id="43v"/></span>
<span style="position: absolute; left: 71px; top: 193px;"><img src="Image/dent/dentrouge/43.png" width="38" id="43r"/></span>
<span style="position: absolute; left: 71px; top: 193px;"><img src="Image/dent/dentjaune/43.png" width="38" id="43j"/></span>
<span style="position: absolute; left: 71px; top: 193px;"><img src="Image/dent/denttransparent/43.png" width="38" id="43t"/></span>
<span style="position: absolute; left: 71px; top: 193px;"><img src="Image/dent/dentblanc/43.png" width="38" id="43b" /></span>
</div>
<div id="den44" onclick="donne_dent('44','première prémolaire');" title="Dent numéro 44 - Première prémolaire"   ondblclick="historique()">
<span style="position: absolute; left: 50px; top: 164px;"><img src="Image/dent/dentvert/44.png" width="38" id="44v"/></span>
<span style="position: absolute; left: 50px; top: 164px;"><img src="Image/dent/dentrouge/44.png" width="38" id="44r"/></span>
<span style="position: absolute; left: 50px; top: 164px;"><img src="Image/dent/dentjaune/44.png" width="38" id="44j"/></span>
<span style="position: absolute; left: 50px; top: 164px;"><img src="Image/dent/denttransparent/44.png" width="38" id="44t"/></span>
<span style="position: absolute; left: 50px; top: 164px;"><img src="Image/dent/dentblanc/44.png" width="38" id="44b" /></span>
</div>
<div id="den45" onclick="donne_dent('45','Deuxième prémolaire');" title="Dent numéro 45 - Deuxième prémolaire"  ondblclick="historique()">
<span style="position: absolute; left: 30px; top: 130px;"><img src="Image/dent/dentvert/45.png" width="38" id="45v" /></span>
<span style="position: absolute; left: 30px; top: 130px;"><img src="Image/dent/dentrouge/45.png" width="38" id="45r"/></span>
<span style="position: absolute; left: 30px; top: 130px;"><img src="Image/dent/dentjaune/45.png" width="38" id="45j"/></span>
<span style="position: absolute; left: 30px; top: 130px;"><img src="Image/dent/denttransparent/45.png" width="38" id="45t"/></span>
<span style="position: absolute; left: 30px; top: 130px;"><img src="Image/dent/dentblanc/45.png" width="38" id="45b" /></span>
</div>
<div id="den46" onclick="donne_dent('46','Première molaire');" title="Dent numéro 46 - Première molaire"  ondblclick="historique()">
<span style="position: absolute; left: 16px; top: 94px;"><img src="Image/dent/dentvert/46.png" width="38" id="46v"/></span>
<span style="position: absolute; left: 16px; top: 94px;"><img src="Image/dent/dentrouge/46.png" width="38" id="46r"/></span>
<span style="position: absolute; left: 16px; top: 94px;"><img src="Image/dent/dentjaune/46.png" width="38" id="46j"/></span>
<span style="position: absolute; left: 16px; top: 94px;"><img src="Image/dent/denttransparent/46.png" width="38" id="46t"/></span>
<span style="position: absolute; left: 16px; top: 94px;"><img src="Image/dent/dentblanc/46.png" width="38" id="46b" /></span>
</div>
<div id="den47" onclick="donne_dent('47','Deuxième molaire');" title="Dent numéro 47 - Deuxième molaire"  ondblclick="historique()">
<span style="position: absolute; left: 8px; top: 56px;"><img src="Image/dent/dentvert/47.png" width="38" id="47v" /></span>
<span style="position: absolute; left: 8px; top: 56px;"><img src="Image/dent/dentrouge/47.png" width="38" id="47r" /></span>
<span style="position: absolute; left: 8px; top: 56px;"><img src="Image/dent/dentjaune/47.png" width="38" id="47j" /></span>
<span style="position: absolute; left: 8px; top: 56px;"><img src="Image/dent/denttransparent/47.png" width="38" id="47t" /></span>
<span style="position: absolute; left: 8px; top: 56px;"><img src="Image/dent/dentblanc/47.png" width="38" id="47b"  /></span>
</div>
<div id="den48" onclick="donne_dent('48','Troisième molaire');" title="Dent numéro 48 - Troisième molaire"  ondblclick="historique()">
<span style="position: absolute; top: 15px; left: 11px;"> <img src='Image/dent/dentvert/48.png' width="38" id="48v" /></span>
<span style="position: absolute; top: 15px; left: 11px;"> <img src='Image/dent/dentrouge/48.png' width="38"  id="48r"/></span>
<span style="position: absolute; top: 15px; left: 11px;"> <img src='Image/dent/dentjaune/48.png' width="38"  id="48j"/></span>
<span style="position: absolute; top: 15px; left: 11px;"> <img src='Image/dent/denttransparent/48.png' width="38"  id="48t"/></span>
<span style="position: absolute; top: 15px; left: 11px;"> <img src='Image/dent/dentblanc/48.png' width="38"  id="48b" /></span>
</div>
</div>


<div style="margin:20px 40px;">
<form name="fm"  action="">
<fieldset>
<legend>PATIENT:</legend>
<?php
include 'conn.php';
$id=$_GET['id_pat'];
$req='select nom_pat,prenom_pat from patient where id='.$id;
$res = mysql_query($req)or die(mysql_error());
if ($res){
while($e=mysql_fetch_object($res))
echo"<table>
<tr><td>Code Patient:</td><td><input type='text'  name='t1' value='$id'/></td></tr>
<tr><td>Nom:</td><td><input type='text'   name='t2' value='$e->nom_pat' /></td></tr>
<tr><td>Prenom:</td><td><input type='text' value='$e->prenom_pat' name='t3' /></td></tr>
</table>";
}
?>
</fieldset>
<fieldset  >
<legend>Actes:</legend>
<table>
<tr>
<td>Liste des Actes:</td>
<td>Numéro dent:</td>
</tr>
<tr>
<?php
include 'conn.php';
$req='select * from acte';
$res = mysql_query($req)or die(mysql_error());
if ($res){
echo"<td><select name='acte'>";
while($e=mysql_fetch_object($res))
echo "<option value='$e->num_acte'>$e->nom_acte</option>";
echo"</select></td>";
}
?>
<td><input type="text" name="num_dent" /></td>
</tr>
<tr>
<td></td>
<td>Nom dent:</td>
</tr>
<tr> <td></td><td><input type="text" name="nom_dent" /></td>
</tr>
</table>
</fieldset>
<fieldset >
<legend>Description:</legend>
<table> <tr>  <td>Nature des intervention:</td> </tr> 
<tr> 
<td><textarea  name= "t6" rows="6" cols="20"> </textarea></td>
</tr>
</table>
</fieldset>
<div>
<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="updatdent(); window.document.fm.reset();">Ajouter</a>  
<a href="javascript:void(0)"  class="easyui-linkbutton" iconCls="icon-cancel" onclick="window.document.fm.reset()">initialiser</a>
</div>
</form>
</div>
<br>
<br>

<script type="text/javascript">
function updatdent() {
     ajouterConsultation(boll);
    var t1 = window.document.fm.t1.value;
    var t2 = window.document.fm.num_dent.value;
    var a = window.document.fm.acte.value;
	var observation = window.document.fm.t6.value;
	var t3=' ';
if (a=='8')
t3='j'; 
else if(a=='9') 
t3='r'; 
else if(a=='1') 
t3='t'; 
else
t3='v';
if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtuser").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "AjouterEtatDent.php?t1=" + t1 + "&t2="+t2+"&t3="+t3 + "&num_acte="+a + "&observation="+observation,true);
    xmlhttp.send();
	affichage(t2,t3);
}
</script>
<div style="margin:10px 0;">  <div id="w" class="easyui-window" title="Historique" data-options="iconCls:'icon-save'" style="width:750px;height:300px;padding:10px;">  
<div id='txtuserrr'> </div>
</div>
</div>



<div style="margin:0px 60px;">
	<table id="tt" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true">
	</table>
	<br />
	<br />
</div>
<div style="margin:0px 60px;">
<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="ajouterLigne_d()">Ajouter Medicamnet</a> 
<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-print" onclick="impression()">Imprimer Ordonnance</a> 
</div>
<br>
<br>
<br>
</div>
<div id="footer">
     	<div class="copyright">
        <img src="Image/footer_logo.gif" alt="" title="" />
        </div>
        <div class="center_footer">&copy; Cabinet Dentaire 2013.Tous Droits Réservés</div>    	    
    </div>
</div>
</body>
<?php
$code=$_GET['id_pat'];
$c = mysql_pconnect('localhost','root','')or die (mysql_error());
$ret = mysql_select_db('c_m')or die (mysql_error());
$req = "select * from etat_dents where code_pat=".$code;
$res = mysql_query($req)or die(mysql_error());
if($res)
{
echo "<table border=3 id='etatt' style='visibility:hidden'>";
echo "<tr>
<td>num</td>
<td>etat</td>
</tr>";
while($e=mysql_fetch_object($res))
echo"<tr> 
<td>$e->num_dent
<td>$e->etat
</tr>";
echo "</table>";
}
?>

</html>
