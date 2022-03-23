<html lang="fr">
<head>
<meta charset="utf-8">
<title>Visualiser clients</title>
<link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<H1>Visualiser la liste des clients :</H1>
<br/>
<br/>
<?php
foreach ($liste as $data) {
echo $data['code_client'].' '.$data['nom'].' '.$data['prenom'].'
'.$data['adresse'].' '.$data['cp'].' '.$data['ville'].'
'.$data['courriel'].$data['telephone'].'<br/>';
}
?>
</body>
</html> 