<html>
<head>
<title>Fiche Médicament</title>
<head>  

     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <meta name="keywords" content="jquery,ui,easy,easyui,web">     
	<link rel="stylesheet" type="text/css" href="plugin/easyui.css">
	<link rel="stylesheet" type="text/css" href="plugin/icon.css">
	<link rel="stylesheet" type="text/css" href="plugin/demo.css">
	<link rel="stylesheet" type="text/css" href="plugin/style.css" media="all"/>
	<script type="text/javascript" src="plugin/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="plugin/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="plugin/jquery.edatagrid.js"></script>
	<link rel="stylesheet" type="text/css" href="plugcla/stylem.css" media="screen" />

<script>
function recupdat()
{var attr = document.getElementById('madate').value;
document.getElementById('textm').value=attr; // Ma valeur
} 
</script>
		<style>
		form{width:400;
		}
		fieldset {
 padding:0 20px 20px 20px;
 margin-bottom:10px;
 width:350px;
 border:1px solid #DF3F3F;
 }</style>
<script type="text/javascript">
function addmed() {
var el = document.getElementById('cbtype');
    var t2 = window.document.fm.t2.value;
    var t3 = window.document.fm.t3.value;
	var t4 = window.document.fm.t4.value;
var t5=el.options[el.selectedIndex].text;
if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtuser").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "Ajouter_medicament.php?&t2="+t2+"&t3="+t3+"&t4="+t4+ "&t5="+t5, true);
    xmlhttp.send();
	 $('#tt').edatagrid('reload');
	 window.document.fm.reset();

}
</script>
 
	<script>
		var type = [
		    {name:'Comprime'},
			 {name:'Bain de bouche'},
			  {name:'Ampoule'},
		    {name:'Goutte'},
			{name:'Sachet'},
			 {name:'Injection'}
		]
		;
		
		
		$(function(){
			$('#tt').edatagrid({
				title:'Liste des Médicaments',
				width:900,
				height:250,
				singleSelect:true,
				idField:'id',
				url:'get_medicament.php',
saveUrl: 'save_medicament.php',
				updateUrl: 'update_medicament.php',
				destroyUrl: 'destroy_medicament.php',
				columns:[[
					{field:'nom',title:'Nom',width:114, 
					 editor:{
       type:'validatebox',options:{
								required:true
							}
       
      }
					},
					{field:'description_med',title:'Description',width:100,
					 editor:{
       type:'validatebox',options:{
								required:true
							}
       
      }
					},
					{field:'code_amm',title:'Code AMM',
					editor:{
							type:'numberbox',
							options:{
								required:true
							}
	
						}},
					{field:'nature',title:'Type',width:80,
						
						editor:{
							type:'combobox',
							options:{
								valueField:'name',
								textField:'name',
								data:type,
								required:true
							}
						}
					}
     
	 
	 
	 
		
		]],	
				
			});
		});
		
	</script> 
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
	                      <br>
						 	<h1 style="text-align:center">Gestion des  Médicaments</h1>
 
	<div id="fiche" style="margin:0px -60px">
<form  name="fm" method="get" action="$('#w').window('open')">
<fieldset >
<legend>INFO Médicament </legend>
<table>

<tr><td>Code AMM:</td><td><input type="text"  id="t4 " name="t4"  onKeyUp="this.value = this.value.match(/\d+/);"  /></td></tr>
<tr><td>Nom:</td><td><input type="text" id="t2" name="t2"  /></td></tr>
<tr><td>Déscription:</td><td><input type="text" id="t3" name="t3" /></td></tr>
<tr><td>Type:</td><td>
<select name="type" id="cbtype" name="cbtype">
  <option value="1">Comprime</option>
  <option value="2">Bain de Bouche</option>
    <option value="3">Ampoule</option>
	    <option value="4">Goutte</option>
		<option value="5">Sachet</option>
		    <option value="6">Injection</option>
</select></td></tr>

</table>
</fieldset>

<br>
<div >
<a href="javascript:void(0)" class="easyui-linkbutton"  onclick="addmed();" data-options="iconCls:'icon-ok'">Ajouter</a>
<a href="javascript:void(0)"  class="easyui-linkbutton" iconCls="icon-cancel" onClick="window.document.fm.reset()">initialiser</a>

</div>
</form>
</div>
<div>
	<table id="tt" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true">
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onClick="javascript:$('#tt').edatagrid('addRow')">Nouveau</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onClick="javascript:$('#tt').edatagrid('destroyRow')">Supprimer</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onClick="javascript:$('#tt').edatagrid('saveRow')">Enregistrer</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onClick="javascript:$('#tt').edatagrid('cancelRow')">Annuler</a>
	</div>
</div>
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