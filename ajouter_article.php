<html>
<head>
	<meta charset="utf-8">
  <title>Ajouter un article</title>
</head>

<body >

<?php 
// récupération des champs venant du formulaire

$designation=$_POST['designation'];
$description=$_POST['description'];
$prix_vente_ht=$_POST['prix_vente_ht'];
$stock=$_POST['stock'];
$code_barre_ean=$_POST['code_barre_ean'];
$code_photo=$_POST['code_photo'];


try
{
	$mysqlClient = new PDO('mysql:host=127.0.0.1;dbname=gestionco;charset=utf8','root','');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Ecriture de la requête
$sqlQuery = 'INSERT INTO articles(designation,description,prix_vente_ht,stock,code_barre_ean,code_photo) VALUES (:designation,:description,:prix_vente_ht,:stock,:code_barre_ean,:code_photo)';
// Préparation
$insertClient = $mysqlClient->prepare($sqlQuery);

// Exécution ! 
$insertClient->execute([
    'designation' => $designation,
    'description' => $description,
    'prix_vente_ht' => $prix_vente_ht,
    'stock' => $stock,
  	'code_barre_ean' => $code_barre_ean,
  	'code_photo' => $code_photo
]);

header("Location:index.php"); //appel de la page index.php
    
?> 



</body>
</html>