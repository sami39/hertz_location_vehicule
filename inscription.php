<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inscription</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php
try {
$db = new PDO('mysql:host=localhost;port=3306;dbname=hertz','root','');
}
catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
?>
<section class="get-in-touch">
<div id="contactformulaire"></div>
<h1 class="title">Inscription</h1>
<form method="post" class="contact-form row">
<div class="form-field col-lg-6">
<input id="name" name="nom_cli" class="input-text js-input" type="text" required>
<label class="label" for="name">Nom</label>
</div>
<div class="form-field col-lg-6 ">
<input id="email"name="prenom_cli" class="input-text js-input" type="text" required>
<label class="label" >Prénom</label>
</div>
<div class="form-field col-lg-6 ">
<input id="company" name="adresse_cli" class="input-text js-input" type="text" required>
<label class="label" for="company">Adresse</label>
</div>
<div class="form-field col-lg-6 ">
<input id="phone" name="code" class="input-text js-input" type="number" required>
<label class="label" for="phone">code postal</label>
</div>
<div class="form-field col-lg-6 ">
<input id="phone" name="ville_cli" class="input-text js-input" type="text" required>
<label class="label" for="phone">ville client</label>
</div>

<div class="form-field col-lg-12">
<input class="submit-btn" type="submit" name="submit" value="S'inscrire">
</div>
</form>
</section>
<?php

if(isset($_POST['submit']) && !empty($_POST['nom_cli']) && !empty($_POST['prenom_cli']) && !empty($_POST['adresse_cli']) && !empty($_POST['code']) && !empty($_POST['ville_cli'])){

$ajouter = $db->prepare('INSERT INTO client (nom_client, prenom_client, adresse_client,code_postal_client,ville_client) VALUES (:nom, :prenom, :adresse,:code_postal,:ville)');
$ajouter->bindParam(':nom', $_POST['nom_cli'],
PDO::PARAM_STR);
$ajouter->bindParam(':prenom', $_POST['prenom_cli'],
PDO::PARAM_STR);
$ajouter->bindParam(':adresse', $_POST['adresse_cli'],
PDO::PARAM_STR);
$ajouter->bindParam(':code_postal', $_POST['code'],
PDO::PARAM_STR);
$ajouter->bindParam(':ville', $_POST['ville_cli'],
PDO::PARAM_STR);
$estceok= $ajouter->execute();
// $ajouter->debugDumpParams();

if($estceok){
echo 'votre enregistrement a été ajouté avec succés';


} else {
echo 'Veuillez recommencer svp, une erreur est survenue';
}
}


?>


</body>

</html>






</body>
</html>