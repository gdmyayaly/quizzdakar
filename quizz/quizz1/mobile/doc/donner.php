<?php
    // $server="localhost";
    // $login="root";
    // $pass="1lovem@ty";
    // $connexion = new PDO("mysql:host=$server;dbname=grow",$login,$pass);
    // $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    include_once('con.php');
    try {
        $req="SELECT * FROM `alluser`";
        $select=$connexion->query($req);
        $result=$select->fetchAll();
        $visiteur=$result[0]['visiteur'];
        $joueur=$result[0]['joueur'];
        $inscrit=$result[0]['inscrit'];
        $michemin=$result[0]['michemin'];
        $tab=['visiteur'=>$visiteur,'inscrit'=>$inscrit,'michemin'=>$michemin,'joueur'=>$joueur];
        echo json_encode($tab);
    }   catch (PDOException $e) {
        echo"Erreur".$e->getMessage();
    }
?>