<html lang="fr">
<head>
<meta charset="utf-8">
<title>Modifier client</title>

<link href="styles.css" type="text/css" rel="stylesheet">
</head>

<body>

<H1>Visualiser-Modifier une fiche client</H1>
<br/><br/>

<?php
	
	// récupération du code client à modifier et conversion en un nombre entier

	$code=intval($_POST['code_client']);

	try
	{
		$mysqlClient = new PDO('mysql:host=127.0.0.1;dbname=gestionco;charset=utf8','root','');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	
	// On récupère tout le contenu de la table clients
	$sqlQuery = 'SELECT * FROM clients WHERE code_client=:code';
	$listeclients = $mysqlClient->prepare($sqlQuery);
	$listeclients->execute(['code'=>$code]);
	$liste = $listeclients->fetchAll();
	
	//gestion d'un code inconnu
	if ($liste==null) {echo 'Ce code client n\'existe pas ! <br/><br/>';}
							

	// On affiche le formulaire de modification prérempli avec les données du client
	foreach ($liste as $data) {
	

		echo '<form method="POST" action="valider_modification_client.php">';
		echo 'Code client : <input type="text" name="code_client" size="5" value="'.$data['code_client'].'" maxlength="10" readonly><br/><br/>';
		echo 'Nom : <input type="text" name="nom" size="50" autofocus="true" value="'.$data['nom'].'" maxlength="50" ><br/><br/>';
		echo 'Prénom : <input type="text" name="prenom" size="50" value="'.$data['prenom'].'" maxlength="50" ><br/><br/> ';
		echo 'Adresse : <input type="text" name="adresse" size="50" value="'.$data['adresse'].'" maxlength="50" ><br/> <br/>';
		echo 'CP : <input type="text" name="cp" size="10" value="'.$data['cp'].'" maxlength="10" ><br/> <br/>';
		echo 'Ville :	<input type="text" name="ville" size="50" value="'.$data['ville'].'" maxlength="50" ><br/> <br/>';
		echo 'Courriel : <input type="email" name="courriel" size="50" value="'.$data['courriel'].'" maxlength="50" ><br/><br/> ';
		echo 'Téléphone : <input type="text" name="telephone" size="20" value="'.$data['telephone'].'" maxlength="20" ><br/><br/> ';
		echo '<input type="submit" value="Modifier" name="modifier">';
		echo '</form>';	
	}
?>
		

	<button type="cancel" onclick="javascript:window.location='index.php';">Retour au menu principal</button>	
</body>
</html>
