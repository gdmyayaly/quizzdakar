<?php
if (isset($_GET['prenom']) || isset($_GET['nom']) || isset($_GET['telephone'] ) || isset($_GET['age'] ) || isset($_GET['sexe'] ) ) {
    $prenom=$_GET['prenom'];
    $nom=$_GET['nom'];
    $numero=$_GET['telephone'];
    $age=$_GET['age'];
    $sexe=$_GET['sexe'];
    include_once('page/con.php');
    // $server="localhost";
    // $login="root";
    // $pass="welcome";
    // $connexion = new PDO("mysql:host=$server;dbname=grow",$login,$pass);
    // $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
        $insertion=$connexion->prepare(
            "INSERT INTO personne(prenom,nom,telephone,age,sexe)
            VALUES(:pre,:nom,:num,:age,:sexe)
            ");
            $insertion->bindParam(':pre',$prenom);
            $insertion->bindParam(':nom',$nom);
            $insertion->bindParam(':num',$numero);
            $insertion->bindParam(':age',$age);
            $insertion->bindParam(':sexe',$sexe);
            $a=$insertion->execute();
    }
    catch (PDOException $e) {
        echo"Erreur".$e->getMessage();
    }
}

?>