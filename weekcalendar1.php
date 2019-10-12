<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

<style type='text/css'>

	body {
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		margin: 0;
	}
	
	h1 {
		margin: 0;
		padding: 0.5em;
	}
	
	p.description {
		font-size: 0.8em;
		padding: 1em;
		position: absolute;
		top: 3.2em;
		margin-right: 400px;
	}
	
	#message {
		font-size: 0.7em;
		position: absolute;
		top: 1em; 
		right: 1em;
		width: 350px;
		display: none;
		padding: 1em;
		background: #ffc;
		border: 1px solid #dda;
	}
	
</style>

<link rel='stylesheet' type='text/css' href='plugcla/jquery-ui.css' />
<link rel='stylesheet' type='text/css' href='plugcla/jquery.weekcalendar.css' />
<link rel="stylesheet" type="text/css" href="plugcla/easyui.css">
	<link rel="stylesheet" type="text/css" href="plugcla/icon.css">
	<link rel="stylesheet" type="text/css" href="plugcla/style.css" media="all"/>
<script type='text/javascript' src='plugcla/jquery.min.js'></script>
<script type='text/javascript' src='plugcla/jquery-ui.min.js'></script>
	<link rel="stylesheet" type="text/css" href="plugcla/stylem.css" media="screen" />


<script type='text/javascript' src='plugcla/jquery.weekcalendar.js'></script>
<script type="text/javascript" src="plugcla/jquery.edatagrid.js"></script>
<script type="text/javascript" src="plugcla/jquery.easyui.min.js"></script>	
<script> 	function supp()
	{
		if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtuser").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "destroy_rdv.php", true);
    xmlhttp.send();
	}
	</script>

<script type='text/javascript'>
	   
	$(document).ready(function() {

		$('#calendar').weekCalendar({
			timeslotsPerHour: 4,
			height: function($calendar){
				return $(window).height() - $("h1").outerHeight();
			},
			eventRender : function(calEvent, $event) {
				if(calEvent.end.getTime() < new Date().getTime()) {
					$event.css("backgroundColor", "#aaa");
					$event.find(".time").css({"backgroundColor": "#999", "border":"1px solid #888"});
				}
			},
			
			noEvents : function() {
				displayMessage("There are no events for this week");
			},
			data:'getrdv.php'
		});

		function displayMessage(message) {
			$("#message").html(message).fadeIn();
		}

		$("<div id=\"message\" class=\"ui-corner-all\"></div>").prependTo($("body"));
		
	});

	

</script>
	<script>

	var title;
	var heurfin;
function addminut()
{
minact=window.document.fm.heur.value;
if(minact.charAt(3)=="3")
{
var heur=minact.charAt(0)+minact.charAt(1);
if(heur<10)
{
if(minact=="08:30")
heurfin="09:00";
else if(minact=="09:30")
heurfin="10:00";
}
else 
{
inc=parseInt (minact.charAt(1))+1;
heurfin=minact.charAt(0)+inc+":00";

}
}
else
{heurfin=minact.charAt(0)+minact.charAt(1)+minact.charAt(2)+"30";

}
return heurfin;
}

	function verifierdate( st ,en,tit)
	{
	Nowdate = new Date();
Nowdate.setHours(0);
Nowdate.setMinutes(0);
Nowdate.setSeconds(0);
Nowdate.setMilliseconds(0)
;
var dd=window.document.fm.t4.value.toString();
var thedate=dd.split('-');
var an=thedate[0];
var mo=thedate[1];
var jo=thedate[2];
var dd_objet = new Date(an,mo-1,jo);
if (dd_objet < Nowdate) 
alert('Date invalide');
else if(dd_objet>Nowdate)
{
$.ajax({
                type : 'POST',
                url : 'verif_rdv.php?start='+window.document.fm.t4.value+"T"+window.document.fm.heur.value+":00.000",
                dataType : 'json',
                data: {},
               success: function( jsondata ){
										
										if(jsondata.length == 0 )
										{
										alert('Rendez Vous affecté avec succé');
										$('#dlg').dialog('close');
										
if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtuser").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "ajouter_rendez_vous.php?t2="+st+"&t3="+en+"&t4="+tit, true);
    xmlhttp.send();

				}
				else alert ("Date non disponible");						
										
										}
            });

}
else
{
Today = new Date;
Heure = Today.getHours();
if(Heure+2< parseInt(window.document.fm.heur.value.charAt(0)+window.document.fm.heur.value.charAt(1)))
{
$.ajax({
                type : 'POST',
                url : 'verif_rdv.php?start='+window.document.fm.t4.value+"T"+window.document.fm.heur.value+":00.000",
                dataType : 'json',
                data: {},
               success: function( jsondata ){
										
										if(jsondata.length == 0 )
										{
										alert('Rendez Vous affecté avec succé');
										$('#dlg').dialog('close');
if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtuser").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "ajouter_rendez_vous.php?t2="+st+"&t3="+en+"&t4="+tit, true);
    xmlhttp.send();

				}
				else alert ("Date non disponible");						
										
										}
            });

}
else 
alert("Date ou Heur invalide");
		}

		}
	function recuperer()
	{
	var b;
$.ajax({
                type : 'POST',
                url : 'get_userbyid.php?id='+window.document.fm.idpat.value,
                dataType : 'json',
                data: {},
               success: function( jsondata ){
										nom=jsondata[0].nom_pat;
										prenom=jsondata[0].prenom_pat;
										title=nom+" "+prenom;
										var start=window.document.fm.t4.value+"T"+window.document.fm.heur.value+":00.000";
										var fin=window.document.fm.t4.value+"T"+addminut()+":00.000";
										verifierdate( start ,fin,title);
										}
            });
			
		}

	</script>
</head>
<body onload="$('#dlg').dialog('close');supp();" onunload="supp();">
<div id="main_container">
	<div class="header">
    	<div id="logo"><a href="index.html"><img src="Image/logo.png" title="" width="162" height="54" border="0" /></a></div>
    
    	<div class="right_header">
        	
            <div class="top_menu">
            <a href="<?php  session_start(); if ($_SESSION['login']=='Secretaire') echo 'index2.php' ; else echo 'index1.html'; ?>" class="login" style="position:absolute; left: 1027px; top: 29px;">Acceuil</a>           
			<a href="Fermer_session.php" class="logout" style="position:absolute; left: 922px; top: 29px;">Déconnexion</a> </div>
			
        </div>
    
    </div>
    
    
    <div id="middle_box" >
	                      <br>

	<h1 style="text-align:center">Rendez vous</h1>
<a href="javascript:void(0)" class="easyui-linkbutton"  onclick="$('#dlg').dialog('open')" data-options="iconCls:'icon-newevent'">Nouveau Rendez Vous</a>
	<div id='calendar'></div>

	<div id="dlg" class="easyui-dialog" title="Nouveau Rendez Vous" data-options="iconCls:'icon-save'" style="width:600px;height:250px;padding:10px">
<form  name="fm" method="get" >
<fieldset >
<legend>Détail d'un rendez vous</legend>
<table>

<tr><td width="75">Code Patient:</td>
<td width="251"><select class="easyui-combogrid" style="width:250px" data-options="
			panelWidth: 500,
			idField: 'id',
			textField: 'id',
			url: 'get_users.php',
			columns: [[
				{field:'id',title:'Code Patient',width:80},
				{field:'nom_pat',title:'Nom',width:120},
				{field:'prenom_pat',title:'Prénom',width:80,align:'right'},
				{field:'date_naissance',title:'Date de naîssance',width:80,align:'right'}

				
			]],
			fitColumns: true
		" name="idpat">
	</select></td></tr>
<tr><td>Date début:</td><td><input type="date" id="t4" name="t4" max="24-02-2013" min="1920-01-01" onFocus="recupdat();"/></td></tr>
<tr><td>Heure début</td><td> <select name="heur" >
  <option>08:00</option>
  <option>08:30</option><option>09:00</option><option>09:30</option><option>10:00</option><option>10:30</option><option>11:00</option><option>11:30</option>
  <option>12:00</option><option>12:30</option><option>15:00</option><option>15:30</option><option>16:00</option><option>16:30</option><option>17:00</option><option>17:30</option>
</select> 


</td></tr>
</table>
</fieldset>

<br>
<div >
<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="recuperer()">Ajouter</a>  
<a href="javascript:void(0)"  class="easyui-linkbutton" iconCls="icon-cancel" onclick="$('#dlg').dialog('close')">Annuler</a>
</div>
</form>	</div>
<br />
<br />
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
