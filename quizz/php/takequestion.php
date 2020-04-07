<?php
//if ($_GET['id']) {
    $id=$_GET['id'];
    echo json_encode(['id'=>$_GET['id']]);
    // include_once 'con.php';
    // $requette="SELECT * FROM `question` WHERE id=$id";
    // $select=$connexion->query($requette);
    // $result=$select->fetchAll();
    // $numero=$result[0]['id'];
    // $titre=$result[0]['titre'];
    // $reponse1=$result[0]['reponse1'];
    // $reponse2=$result[0]['reponse2'];
    // $reponse3=$result[0]['reponse3'];
    // $goodreponse=$result[0]['goodreponse'];
    // $image=$result[0]['image'];
    // $tableau=[
    //             'titre'=>$titre,'numero'=>$numero,'reponse1'=>$reponse1,
    //             'reponse2'=>$reponse2,'reponse3'=>$reponse3,'goodreponse'=>$goodreponse,
    //             'image'=>$image
    // ];
    // echo json_encode($tableau);
//}
?>