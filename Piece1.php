<?php
try {
 $dbh = new PDO('mysql:host=localhost;dbname=myhot', 'root', '');
 $req = $dbh->query('SELECT temp_ext, temp_in, date_heure, hygro, lumi FROM donne ORDER BY date_heure DESC LIMIT 1');
 // Ordonne la base de donné par date (DESC pour ordre décroissant)
 $rep = $req ->fetch();
 $dbh = null;
} catch (PDOException $e) {
 print "Erreur !: " . $e->getMessage() . "<br/>";
 die();
}
?>

<html>
<head>
	
<TITLE>PIECE1</TITLE>
<link rel="style" type="text/css" href="style.css">
<meta http-equiv="content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
<h1 align=center><font size="20" face="Arial" color = #F17C34> Pièce 1 </font> </h1>

<table border="1" width="75%"  align="left">
	<tr> 
        <td style="text-align: center" height="50px" colspan="2"> <?php echo($rep["date_heure"]);?> </td>
        </td>
    </tr>
	<tr> 
		<td style="text-align: center" height="50px" width="80%"> <span style="font-size: 20px;"> Température exterieur : </td>
		<td style="text-align: center" height="50px" ><span style="font-size: 25px;"> <?php echo($rep["temp_ext"]);?> °C</td>
	</tr>
	<tr>
		<td style="text-align: center" height="50px" width="80%"> <span style="font-size: 20px;"> Température interrieur : </td>
		<td style="text-align: center" height="50px" ><span style="font-size: 25px;"> <?php echo($rep["temp_in"]);?> °C</td>
	</tr>
	<tr>
	
		<td style="text-align: center" height="50px" width="80%"> <span style="font-size: 20px;"> Taux d'huminidé :  </td>
		<td style="text-align: center" height="50px" ><span style="font-size: 25px;"> <?php echo($rep["hygro"]);?> %</td>
	<tr>
		<td style="text-align: center" height="50px" width="80%"> <span style="font-size: 20px;"> Luminositée : </td>
		<td style="text-align: center" height="50px" > <span style="font-size: 25px;"> <?php echo($rep["lumi"]);?> lux</td>
	</tr>
</table>
<br>

<form method="POST" action="historique.php"> 
<p><input type="submit" value="Historique"/> <input type="hidden" name="action" value="0"/>
</p>
<p> <br> </p>
</form>

<table border="1" width="25%"  style="position: absolute; bottom: 20; left: 10; text-align: left;padding-l: 20px;">
	<tr> 
		<td style="text-align: center" height="50px"> <a href="infoSupport.php" style="color: #000000"><span style="font-size: 20px;">Information et support </a> </td>
		
	</tr>
</table>

<p style="position: absolute; bottom: 0; right: 0; text-align: left;padding-right: 20px;"><font size="2" face="Arial" color = #000000><B>Projet de 5A - Bauchet - Voisin </B></font> </p>
</body>
</html>