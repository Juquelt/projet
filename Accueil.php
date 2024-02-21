

<html>
<head>
	
<TITLE>MAISON</TITLE>
<link rel="style" type="text/css" href="style.css">
<meta http-equiv="content-Type" content="text/html; charset=UTF-8"/>


</head>
<body style="background-color:#6CA6E8"> 



<h1 align=center><font size="20" face="Arial" color = #F17C34> 	Mon bâtiment </font> </h1>
<p align=center> <?php echo date('d/m/Y'); ?> </p>

<table border="1" width="75%"  align="center">
	<tr> 
		<td style="text-align: center" height="50px" width="50%"> <a href="Piece1.php"style="color: #000000"><span style="font-size: 20px;"> PIECE1 </a> </td>
		<td style="text-align: center" height="50px" ><a href=""style="color: #000000"> <span style="font-size: 20px;">Pièce supplémentaire </a> </td>
	</tr>
</table>
<p> température exterieur :

<?php
try {
 $dbh = new PDO('mysql:host=localhost;dbname=myhot', 'root', '');
 $req = $dbh->query('SELECT temp_ext FROM donne ORDER BY date_heure DESC LIMIT 1');
 // Ordonne la base de donné par date (DESC pour ordre décroissant) et on selectionne que temp_ext de la bdd
 $rep = $req ->fetch();
 //On récupère la donné nommé "temp_ext" pour afficher uniquement elle
 echo($rep["temp_ext"]); 
 $dbh = null;
} catch (PDOException $e) {
 print "Erreur !: " . $e->getMessage() . "<br/>";
 die();
}
?>
</p>
<p> <br> </p>
<table border="1" width="25%"  style="position: absolute; bottom: 20; left: 10; text-align: left;padding-l: 20px;">
	<tr> 
		<td style="text-align: center" height="50px"> <a href="infoSupport.php" style="color: #000000"><span style="font-size: 20px;">Information et support </a> </td>
		
	</tr>
</table>

<?php
echo "Vous avez ". $_POST['age'] ." ans.<br\>";  if ($_POST['age']>=18)
{  echo "vous etes majeur.<br\>";}  else { echo "vous etes mineur.<br\>";}
?>


<p style="position: absolute; bottom: 0; right: 0; text-align: left;padding-right: 20px;"><font size="2" face="Arial" color = #000000><B>Projet de 5A - Bauchet - Voisin </B></font> </p>
</body>
</html>