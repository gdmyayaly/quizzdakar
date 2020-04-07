<?php
if (isset($_GET['prenom']) || isset($_GET['nom']) || isset($_GET['telephone'])) {
    $prenom=$_GET['prenom'];
    $nom=$_GET['nom'];
    $numero=$_GET['telephone'];
    $server="localhost";
    $login="root";
    $pass="1lovem@ty";
    $connexion = new PDO("mysql:host=$server;dbname=grow",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
        $insertion=$connexion->prepare(
            "INSERT INTO personne(prenom,nom,telephone)
            VALUES(:pre,:nom,:num)
            ");
            $insertion->bindParam(':pre',$prenom);
            $insertion->bindParam(':nom',$nom);
            $insertion->bindParam(':num',$numero);
            $insertion->execute();
    }
    catch (PDOException $e) {
        echo"Erreur".$e->getMessage();
    }
}

?>