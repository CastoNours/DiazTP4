<html>
<head>
	<meta charset="utf-8">
  <title>Ajouter un client</title>
</head>

<body >

<?php 
// récupération des champs venant du formulaire

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$cp=$_POST['cp'];
$ville=$_POST['ville'];
$courriel=$_POST['courriel'];
$telephone=$_POST['telephone'];


try
{
	$mysqlClient = new PDO('mysql:host=127.0.0.1;dbname=gestionco;charset=utf8','root','');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Ecriture de la requête
$sqlQuery = 'INSERT INTO clients(nom,prenom,adresse,cp,ville,telephone,courriel) VALUES (:nom,:prenom,:adresse,:cp,:ville,:telephone,:courriel)';

// Préparation
$insertClient = $mysqlClient->prepare($sqlQuery);

// Exécution ! 
$insertClient->execute([
    'nom' => $nom,
    'prenom' => $prenom,
    'adresse' => $adresse,
    'cp' => $cp,
	'ville' => $ville,
	'telephone' => $telephone,
	'courriel' => $courriel
]);

	header("Location:index.php"); //appel de la page index.php
    
?> 



</body>
</html>