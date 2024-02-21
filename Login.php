
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        #login-container {
            width: 500px;
            padding: 20px;
            border-radius: 5px;
        }
        #logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
        #logo-container img {
            width: 100%; 
			margin_left: -50px;
            height: auto; 
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
</head>
<body style="background-color:#D3D3D3"> 
	
    <div id="login-container">
	<div id="logo-container">
            <img src="LogoC.png" alt="LogoC">
        </div>
         <form method="post" action="Accueil.php">
           <label ><b>Identifiant :</label></b>
		   <input type="text" name="identifiant" placeholder="Nom.Prenom" required><br>
		   <label ><b>Mot de passe :</label></b>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe" required><br>
            <input type="submit" value="Connexion">
        </form>
       
    </div>
</body>
</html>



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