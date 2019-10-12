
<html>
<head>
<title>Fiche_Patient</title>
<head>  
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <meta name="keywords" content="jquery,ui,easy,easyui,web">     
	<link rel="stylesheet" type="text/css" href="plugin/easyui.css">
	<link rel="stylesheet" type="text/css" href="plugin/icon.css">
	<link rel="stylesheet" type="text/css" href="plugin/demo.css">
	<link rel="stylesheet" type="text/css" href="plugin/style.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="plugcla/stylem.css" media="screen" />

	
	<script type="text/javascript" src="plugin/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="plugin/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="plugin/jquery.edatagrid.js"></script>
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
function updateuser() {
    var t2 = window.document.fm.t2.value;
    var t3 = window.document.fm.t3.value;
	var t4 = window.document.fm.t4.value;
    var t5 = window.document.fm.t5.value;
    var t6 = window.document.fm.t6.value;
	var t7 = window.document.fm.t7.value;
    var t8 = window.document.fm.t8.value;
    var t9 = window.document.fm.t9.value;
	var r2=' '
	if (window.document.fm.r1[0].checked)
	r2='Homme';
	else
	r2='Femme'
	var r1=r2;
if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtuser").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "Ajouter_patient.php?t2="+t2+"&t3="+t3+"&t4="+t4+ "&t5="+t5+"&t6="+t6+"&t7="+t7+"&t8="+t8+"&t9="+t9+"&r1="+r1, true);
    xmlhttp.send();
	 $('#tt').edatagrid('reload'); 
}
</script>
 
	<script>
		var sexe = [
		    {name:'Homme'},
		    {name:'Femme'}
		]
		var ville = [
		    {name:'Ariana'},
{name:'Béja '},
{name:'Ben Arous '},
{name:'Bizerte '},
{name:'Gabès '},
{name:'Gafsa'},
{name:'Jendouba '},
{name:'Kairouan '},
{name:'Kasserine '},
{name:'Kébili '},
{name:'La Manouba '},
{name:'Le Kef '},
{name:'Mahdia '},
{name:'Médenine '},
{name:'Monastir '},
{name:'Nabeul '},
{name:'Sfax '},
{name:'Sidi Bouzid'},
{name:'Siliana '},
{name:'Sousse '},
{name:'Tataouine '},
{name:'Tozeur '},
{name:'Tunis '},
{name:'Zaghouan '}
		]
		
		;
		
		
		$(function(){
			$('#tt').edatagrid({
				title:'Liste des patients',
				width:900,
				height:250,
				singleSelect:true,
				idField:'id',
				url:'get_users.php',
saveUrl: 'save_user.php',
				updateUrl: 'update_user.php',
				destroyUrl: 'destroy_user.php',
				columns:[[
					{field:'nom_pat',title:'Nom',width:114, 
					 editor:{
       type:'validatebox',options:{
								required:true
							}
       
      }
					},
					{field:'prenom_pat',title:'Prénom',width:100,
					 editor:{
       type:'validatebox',options:{
								required:true
							}
       
      }
					},
					{field:'date_naissance',title:'Date de naissance',
					editor:{
							type:'datebox',
							options:{
								required:true
							}
	
						}},
					{field:'sexe',title:'Sexe',width:80,
						
						editor:{
							type:'combobox',
							options:{
								valueField:'name',
								textField:'name',
								data:sexe,
								required:true
							}
						}
					}, {field:'profession',title:'Profession',width:100,
						editor:{
						type:'validatebox'
								}
						},
     
	 
     {field:'ville',title:'Ville',width:100,
      
      editor:{
       type:'combobox',
	   options:{
				valueField:'name',
				textField:'name',
				data:ville
				
       
      }}
     },
	 {field:'adresse',title:'Adresse',width:200,
      
      editor:{
       type:'validatebox'
       
      }
     },
	 {field:'tel_domicile',title:'Tel Domicile',width:90,
      
      editor:{
       type:'numberbox'
       
      }
     },
	 {field:'tel_portable',title:'Tel Portable',width:90,
      
      editor:{
       type:'numberbox'
       
      }
     
		
		
		}]],	
				
			});
		});
		
	</script> 
</head>
<body>
<div id="main_container">
	<div class="header">
    	<div id="logo"><a href="index.html"><img src="Image/logo.png" alt="" title="" width="162" height="54" border="0" /></a></div>
    
    	<div class="right_header">
        	
            <div class="top_menu">
            <a href="index2.php" class="login" style="position:absolute; left: 1027px; top: 29px;">Acceuil</a>        
			<a href="Fermer_session.php" class="logout" style="position:absolute; left: 922px; top: 29px;">Déconnexion</a>    </div>
			
        </div>
    
    </div>
    
    
    <div id="middle_box" style="margin:auto">
	<br>
		<h1 style="text-align:center">Gestion des Patients</h1>
		<br>

	<div id="fiche" style="margin:0px -60px;">
	<form  name="fm" method="get" action="$('#w').window('open')">
<fieldset >
<legend>INFO PATIENT</legend>
<table>
<tr>
<td><input type="radio" id="r1" name= r1 value="homme" checked/>Homme</td>
<td><input type="radio" id="r1" name= r1 value="femme" />Femme</td>
</tr>
<tr><td>Nom:</td><td><input type="text" id="t2" name="t2"  /></td></tr>
<tr><td>Prenom:</td><td><input type="text" id="t3" name="t3" /></td></tr>
<tr><td>Date Naissance:</td><td><input type="date" id="t4" name="t4" max="24-02-2013" min="1920-01-01" onFocus="recupdat();"/></td></tr>
<tr><td>Profession:</td><td> <input type="text" id="t5" name="t5"/></td></tr>
<tr><td>Ville:</td><td> <select name="t7"
<option>Ariana</option>
<option>Béja </option>
<option>Ben Arous </option>
<option>Bizerte </option>
<option>Gabès </option>
<option>Gafsa </option>
<option>Jendouba </option>
<option>Kairouan </option>
<option>Kasserine </option>
<option>Kébili </option>
<option>La Manouba </option>
<option>Le Kef </option>
<option>Mahdia </option>
<option>Médenine </option>
<option>Monastir </option>
<option>Nabeul </option>
<option>Sfax </option>
<option>Sidi Bouzid </option>
<option>Siliana </option>
<option>Sousse </option>
<option>Tataouine </option>
<option>Tozeur </option>
<option>Tunis </option>
<option>Zaghouan </option>
</select></td></tr>
</table>
</fieldset>
<fieldset  >
<legend>CONTACT PATIENT</legend>
<table>
<tr><td>Tel Domicile:</td><td><input type="text" id="t8" name="t8" onKeyUp="this.value = this.value.match(/\d+/);"/></td></tr>
<tr><td>Tel Portable:</td><td><input type="text" id"t9" name="t9" onKeyUp="this.value = this.value.match(/\d+/);" /></td></tr>
<tr><td>Adresse:</td><td><textarea  name= "t6" rows="6" cols="20"> </textarea></td></tr>
</table>
</fieldset>
<br>
<div >
<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="updateuser();window.document.fm.reset()">Ajouter</a>  
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
        <img src="Image/footer_logo.gif" alt="" title="" />
        </div>
        <div class="center_footer">&copy; Cabinet Dentaire 2013.Tous Droits Réservés</div>    	    
    </div>
</div>
</body>
</html>
