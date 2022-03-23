<html lang="fr">
<head>
<meta charset="utf-8">
<title>Visualiser articles</title>
<link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<H1>Visualiser la liste des articles :</H1>
<br/>
<br/>
<?php
foreach ($liste as $data) {
echo $data['code_article'].' '.$data['designation'].' '.$data['description'].'
'.$data['prix_vente_ht'].' '.$data['stock'].' '.$data['code_barre_ean'].'
'.$data['code_photo'].'<br/>';
}
?>
</body>
</html> 