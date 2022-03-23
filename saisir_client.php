<html lang="fr">
<head>
<meta charset="utf-8">
<title>Ajouter un client</title>

<link href="styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<H1>Ajouter un client</H1>
		<form method="POST" action="ajouter_un_client.php">
		NOM : <input type="text" name="nom" size="50" value="NOM" maxlength="50"  autofocus="true"><br/><br/> 
		Prénom : <input type="text" name="prenom" size="50" value="Prenom" maxlength="50" ><br/><br/> 
		Adresse : <input type="text" name="adresse" size="50" value="Adresse" maxlength="50" ><br/> <br/>
		CP : <input type="text" name="cp" size="10" value="00000" maxlength="10" ><br/> <br/>
		Ville :	<input type="text" name="ville" size="50" value="ville" maxlength="50" ><br/> <br/>
		Courriel : <input type="email" name="courriel" size="50" value="aa@bb.com" maxlength="50" ><br/><br/> 
		Téléphone : <input type="text" name="telephone" size="20" value="00.11.22.33.44" maxlength="20" ><br/><br/> 		
		<input type="submit" value="Ajouter" name="ajouter">
		</form>

		<button type="cancel" onclick="javascript:window.location='index.php';">Retour au menu principal</button>	
</body>
</html>
