<html lang="fr">
<head>
<meta charset="utf-8">
<title>Ajouter un article</title>

<link href="styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<H1>Ajouter un article</H1>
		<form method="POST" action="ajouter_article.php">
		Désignation : <input type="text" name="designation" size="50" value="designation" maxlength="50"  autofocus="true"><br/><br/> 
		Description : <input type="text" name="description" size="50" value="description" maxlength="50" ><br/><br/> 
		Prix : <input type="text" name="prix_vente_ht" size="50" value="prix de vente" maxlength="50" ><br/> <br/>
		Stock : <input type="text" name="stock" size="10" value="stock" maxlength="10" ><br/> <br/>
		Code barre : <input type="text" name="code_barre_ean" size="50" value="code barre" maxlength="50" ><br/> <br/>
		Code photo : <input type="text" name="code_photo" size="50" value="code photo" maxlength="50" ><br/><br/>  		
		<input type="submit" value="Ajouter" name="ajouter">
		</form>

		<button type="cancel" onclick="javascript:window.location='index.php';">Retour au menu principal</button>	
</body>
</html>
