<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
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
    <form method="GET">
        <input type="date" name="date_d">
        <input type="date" name="date_f">
        <select name="marque">
            <option value="">--choisissez votre voiture --</option>
            <option value="Peugeot">Peugeot</option>
            <option value="Renault">Renault</option>
            <option value="Opel">Opel</option>
            <option value="Citroën">Citroën</option>
            <option value="Volkswagen">Volkswagen</option>
            <option value="BMW">BMW</option>
            <option value="Audi">Audi</option>
            <option value="autre">autre</option>
        </select>

        <button type="submit" name="submit">recherche</button>


    </form>
    <?php

if(isset($_GET['submit']) && $_GET['submit']=="submit" && !empty($_GET['date_d']) && !empty($_GET['date_f']) && !empty($_GET['date_f'])&& !empty($_GET['marque'])){


$modifier = $db->prepare('SELECT * FROM `louer` WHERE marque_vehicule=:marque_v AND date_debut=:date_un AND date_defin=:date_two');
$modifier->bindParam(':marque_v ', $_GET['marque'], PDO::PARAM_STR);
$modifier->bindParam(':date_un', $_GET['date_d'], PDO::PARAM_STR);
$modifier->bindParam(':date_two', $_GET['date_f'], PDO::PARAM_STR);
 

 $modifier->execute();
 
$modifier->debugDumpParams();
//die;
 
   if($modifier){
    echo"bienvenu";
    
   
   } else {
       echo "<font color='red'> Veuillez recommencer svp, une erreur est survenue</font>";
   }

}
?>


</body>

</html>