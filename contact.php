<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="plugcla/stylem.css" media="screen" />

<title>Contact</title>
</head>

<body >
<div id="main_container">
	<div class="header">
    	<div id="logo"><a href="index.html"><img src="Image/logo.png" title="" width="162" height="54" border="0" /></a></div>
    
    	<div class="right_header">
        	
            <div class="top_menu">
            <a href= "<?php  session_start(); if ($_SESSION['login']=='Secretaire') echo 'index2.php' ; else echo 'index1.html'; ?>"  class="login" style="position:absolute; left: 1027px; top: 29px;">Acceuil</a>       
			<a href="Fermer_session.php" class="logout" style="position:absolute; left: 922px; top: 29px;">Déconnexion</a>     </div>
			
        </div>
    
    </div>
    
    
    <div id="middle_box" >
		<h1 style="text-align:center">Contact</h1>

	<div id="text" style="color:#FFFFFF;font-family:'Times New Roman', Times, serif;font-size:14px; margin-left:30px">
	                      <br>
						  Horaires d'ouverture du cabinet : 
						  <br />
Du lundi au vendredi de 8h00 à 13h0 et de 15h00 à 18h00
<br />
Le samedi de 8h00 à 12h00
<br />


Notre cabinet se situe à route de l'aèreport km 4 près de l'école de commerce 
<br />
Sur rendez-vous :
<br /> 
En appelant au (216) 74 278 777 
<br />
Email : contact@fsegs.rnu.tn

</div>
 <div align="center">
        
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.tn/maps/ms?msa=0&amp;msid=207440577968709436746.0004db7468a9a6d3a0fde&amp;ie=UTF8&amp;t=h&amp;ll=34.734312,10.709771&amp;spn=0.003086,0.00456&amp;z=17&amp;output=embed"></iframe><br /><small>Afficher <a href="https://maps.google.tn/maps/ms?msa=0&amp;msid=207440577968709436746.0004db7468a9a6d3a0fde&amp;ie=UTF8&amp;t=h&amp;ll=34.734312,10.709771&amp;spn=0.003086,0.00456&amp;z=17&amp;source=embed" style="color:#0000FF;text-align:left">Position de cabinet</a> sur une carte plus grande</small>

					  
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
