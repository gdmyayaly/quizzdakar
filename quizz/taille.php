<?php
    include_once 'php/con.php';
    $r="SELECT COUNT(*) FROM question";
    $a=$connexion->query($r)->fetchAll();
    $b=$a[0][0];
   // var_dump($b);
    $tableau=['taille'=>$b];
    echo json_encode($tableau);

?>