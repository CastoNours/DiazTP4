<html lang="fr">
<head>
<meta charset="utf-8">
<title>Visualiser clients</title>
<link href="styles.css" type="text/css" rel="stylesheet">
</head>

<body>

<div id="menu">
<hr><H1>Gestion Commerciale</H1><hr>

<br/>
<hr>
<H2>CLIENTS</H2>
	<a href="visu_clients.php">Visualiser tous les clients</a><br/>
	<a href="saisir_client.php">Ajouter un client</a><br/>
	<form method="POST" action="modifier_client.php">
		Visualiser/Modifier le client n°
		<input type="text" name="code_client" size="5" value="1" maxlength="10" >
		<input type="submit" value="Ouvrir" name="ouvrir">	
	</form>
	<br/>	
	
<hr>	
<H2>ARTICLES</H2>
	<a href="visu_articles.php">Visualiser tous les articles</a><br/>
	<a href="saisir_article.php">Ajouter un article</a>	<br/>
	<form method="POST" action="modifier_article.php">
		Visualiser/Modifier l'article n°
		<input type="text" name="code_article" size="5" value="1" maxlength="10" >
		<input type="submit" value="Ouvrir" name="ouvrir">		
	</form>	
	<br/><hr>
</div>

</body>
</html>
