<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hertz</title>
</head>

<body>
    <h1>client</h1>
    <form method='GET'>

        <input type="text" name="nom_cli" placeholder="nom">
        <input type="text" name="prenom_cli" placeholder="prenom">
        <input type="text" name="adresse_cli" placeholder="adresse">
        <input type="number" name="code" placeholder="code_postal">
        <input type="text" name="ville_cli" placeholder="ville">
        <button type="submit" value="ajouter" name="action">ajouter</button>
    </form>
    <?php 

    try {
        $db = new PDO('mysql:host=localhost;port=3306;dbname=hertz','root','');
        }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }



if(isset($_GET['action']) && !empty($_GET['nom_cli']) && !empty($_GET['prenom_cli'])  && !empty($_GET['adresse_cli'])  && !empty($_GET['code']) && !empty($_GET['ville_cli'])){

    $ajouter = $db->prepare('INSERT INTO client (nom_client, prenom_client, adresse_client,code_postal_client,ville_client) VALUES (:nom, :prenom, :adresse,:code_postal,:ville)');
    $ajouter->bindParam(':nom', $_GET['nom_cli'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':prenom', $_GET['prenom_cli'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':adresse', $_GET['adresse_cli'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':code_postal', $_GET['code'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':ville', $_GET['ville_cli'], 
    PDO::PARAM_STR);
    $estceok= $ajouter->execute();
    //$ajouter->debugDumpParams();
  
        if($estceok){
            echo 'votre enregistrement a été ajouté avec succés';
            
        
        } else {
            echo 'Veuillez recommencer svp, une erreur est survenue';
        }
}
 


?>
    <br><br>
    <form method='GET'>
        <input type="number" name="id" placeholder="Id client">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="text" name="adresse" placeholder="adresse">
        <input type="number" name="code_postal" placeholder="code postal">
        <input type="text" name="ville" placeholder="ville">
        <button type="submit" value="modifier" name="update">Modifier</button>
        <button type="submit" value="delete" name="suprime">suprimer</button>

    </form>
    <?php 
    if(isset($_GET['update']) && $_GET['update']=="modifier"  && !empty($_GET['id'])  && !empty($_GET['nom'])  && !empty($_GET['prenom']) && !empty($_GET['adresse'])  && !empty($_GET['code_postal']) && !empty($_GET['ville'])){
       
        $modifier = $db->prepare('UPDATE client SET nom_client=:nom, prenom_client=:prenom, adresse_client=:adresse,code_postal_client=:code,ville_client=:ville WHERE id_client=:id');
        $modifier->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
        $modifier->bindParam(':nom', $_GET['nom'], PDO::PARAM_STR);
        $modifier->bindParam(':prenom', $_GET['prenom'], PDO::PARAM_STR);
        $modifier->bindParam(':adresse', $_GET['adresse'], PDO::PARAM_STR);
        $modifier->bindParam(':code', $_GET['code_postal'], PDO::PARAM_STR);    
        $modifier->bindParam(':ville', $_GET['ville'], PDO::PARAM_STR);    



        
        $modifier = $modifier->execute();
         //$modifier->debugDumpParams();
         //die;
            if($modifier){
                echo 'votre enregistrement a bien été modifié';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }
    

        if(isset($_GET['suprime']) && $_GET['suprime']=="delete" && !empty($_GET['id'])){

            $supprimer = $db->prepare('DELETE FROM client WHERE id_client =:id');
          $supprimer->bindParam(':id', $_GET['id'], 
          PDO::PARAM_STR);
  
  
          $supprimer = $supprimer->execute();
              if($supprimer){
                  echo 'votre enregistrement a bien été supprimé';
                  
              
              } 
              else {
                  echo 'Veuillez recommencer svp, une erreur est survenue';
              }
          }
    
    ?>
    <br><br>
    <?php 
 $recuperation = $db->query('SELECT * FROM client');
 while ($client = $recuperation->fetch()){
 echo "<form><div>
 <input type='number' name='id' value='".$client['id_client']."'>
 <input type='text' name='nom' value='".$client['nom_client']."'>
 <input type='text' name='prenom' value='".$client['prenom_client']."' >
 <input type='text' name='adresse' value='".$client['adresse_client']."' >
 <input type='number' name='code_postal' value='".$client['code_postal_client']."'>
 <input type='text' name='ville' value='".$client['ville_client']."' >
 <button type='submit' value='modifier' name='update'>Modifier</button>
 <button type='submit' value='delete'name='suprime'>suprimer</button>

</form>
</div>";
}

?>
    <br><br>
    <h1>vehicule</h1>
    <form method='GET'>

        <input type="text" name="immatriculation" placeholder="immatriculation">

        <input type="text" name="marque_vehicule" placeholder="marque_vehicule">

        <button type="submit" value="ajouter" name="action">ajouter</button>
    </form>
    <?php
     
if(isset($_GET['action']) && !empty($_GET['immatriculation']) && !empty($_GET['marque_vehicule'])){

$ajouter = $db->prepare('INSERT INTO vehicule (immatriculation_voiture,marque_vehicule,vehicule_dispo) VALUES (:plaque,:marque,1)');
$ajouter->bindParam(':plaque', $_GET['immatriculation'], 
PDO::PARAM_STR);
$ajouter->bindParam(':marque', $_GET['marque_vehicule'],
PDO::PARAM_STR);

$estceok= $ajouter->execute();
//$ajouter->debugDumpParams();

    if($estceok){
        echo 'votre enregistrement a été ajouté avec succés';
        
    
    } else {
        echo 'Veuillez recommencer svp, une erreur est survenue';
    }
}
?>
    <br><br>
    <form method='GET'>
        <input type="number" name="id" placeholder="id">
        <input type="text" name="immatriculation" placeholder="immatriculation">

        <input type="text" name="marque" placeholder="marque_vehicule">
        <button type="submit" value="modifier" name="action_deux">modifier</button>
        <button type="submit" value="delete" name="action_un">suprimer</button>
    </form>
    <?php 
    if(isset($_GET['action_deux']) && $_GET['action_deux']=="modifier"  && !empty($_GET['id'])  && !empty($_GET['immatriculation'])  && !empty($_GET['marque'])){
       
        $modifier = $db->prepare('UPDATE vehicule SET id_vehicule=:id,immatriculation_voiture=:plaque, marque_vehicule=:marques WHERE id_vehicule=:id');
        $modifier->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
        $modifier->bindParam(':plaque', $_GET['immatriculation'], PDO::PARAM_STR);
        $modifier->bindParam(':marques', $_GET['marque'], PDO::PARAM_STR);
      


        
        $modifier = $modifier->execute();
         //$modifier->debugDumpParams();
         //die;
            if($modifier){
                echo 'votre enregistrement a bien été modifié';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }
        if(isset($_GET['action_un']) && $_GET['action_un']=="delete" && !empty($_GET['id'])){

            $supprimer = $db->prepare('DELETE FROM vehicule WHERE id_vehicule =:id');
          $supprimer->bindParam(':id', $_GET['id'], 
          PDO::PARAM_STR);
  
  
          $supprimer = $supprimer->execute();
              if($supprimer){
                  echo 'votre enregistrement a bien été supprimé';
                  
              
              } 
              else {
                  echo 'Veuillez recommencer svp, une erreur est survenue';
              }
          }
        ?>
            <br><br>
    <?php 
 $recuperation = $db->query('SELECT * FROM vehicule');
 while ($vehicule = $recuperation->fetch()){
 echo "<div><form>
 <input type='number' name='id' value='".$vehicule['id_vehicule']."'>
 <input type='text' name='immatriculation' value='".$vehicule['immatriculation_voiture']."'>
 <input type='text' name='marque' value='".$vehicule['marque_vehicule']."'>
 <button type='submit' value='modifier' name='action_deux'>modifier</button>
 <button type='submit' value='delete' name='action_un'>suprimer</button>

</form>
</div>";

}
?>
<h1>louer</h1>
<form method='GET'>
        <input type="number" name="id" placeholder="id_client">
        <input type="number" name="idd" placeholder="id_vahicule">
        <input type="date" name="dateone">
        <input type="date" name="datetwo">
        <button type="submit" value="ajouter" name="action">ajouter</button>
       
    </form>
<h1>voiture dispo</h1>
<?php

if(isset($_GET['action']) && !empty($_GET['id']) && !empty($_GET['idd'])  && !empty($_GET['dateone'])  && !empty($_GET['datetwo'])){

    $ajouter = $db->prepare('INSERT INTO louer (id_client,id_vehicule,date_debut,date_defin) VALUES (:id,:iddd,:dateun,:dated)');
    $ajouter->bindParam(':id', $_GET['id'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':iddd', $_GET['idd'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':dateun', $_GET['dateone'], 
    PDO::PARAM_STR);
    $ajouter->bindParam(':dated', $_GET['datetwo'], 
    PDO::PARAM_STR);
   
    $estceok= $ajouter->execute();
    if($estceok){
        echo 'votre enregistrement a été ajouté avec succés';
        
    
    } else {
        echo 'Veuillez recommencer svp, une erreur est survenue';
    }
    //$ajouter->debugDumpParams();      
}
$maj_vehicule=$db->prepare('UPDATE vehicule SET vehicule_dispo =0 WHERE id_vehicule=:idd');
$maj_vehicule->bindParam(':idd', $_GET['idd'],
PDO::PARAM_STR);
$maj_vehicule->execute();

$dispo = $db->prepare('SELECT * FROM vehicule WHERE  vehicule_dispo = 1');
$dispo->execute();
$dispo = $dispo->fetchAll(PDO::FETCH_ASSOC);

foreach($dispo as $info){
  echo "<br/>".$info['id_vehicule']."  immatriculation est : ".$info['immatriculation_voiture']." marque: ".$info['marque_vehicule']."<br/>";
}

 //joiture 
 
$lister = $db->prepare('SELECT * FROM client
INNER JOIN louer ON client.id_client = louer.id_client
INNER JOIN vehicule ON louer.id_vehicule = vehicule.id_vehicule');

//ON EXECUTE LA REQUETE
$lister->execute();
//ON PASSE TOUS LES RESULTAT DANS UN TABLEAU
$lister = $lister->fetchAll(PDO::FETCH_ASSOC);
//var_dump($lister);
//ON FAIT LA BOUCLE QUI AFFICHE TOUS LES RESULTATS

foreach($lister as $info){
    echo "<br/>"."<br/>".$info['nom_client']." a loué ".$info['marque_vehicule']." du ".$info['date_debut']." au ".$info['date_defin']."<br/>";
 }
 

?>

</html>