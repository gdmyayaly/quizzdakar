<?php
include_once('../page/con.php');
$requetteH="SELECT COUNT(sexe) FROM `personne` WHERE sexe='H';";
$requetteF="SELECT COUNT(sexe) FROM `personne` WHERE sexe='F';";
$select=$connexion->query($requetteH);
$resultH=$select->fetchAll();
$select=$connexion->query($requetteF);
$resultF=$select->fetchAll();
$homme=($resultH[0]["COUNT(sexe)"]/($resultH[0]["COUNT(sexe)"]+$resultF[0]["COUNT(sexe)"]))*100;
$femme=($resultF[0]["COUNT(sexe)"]/($resultH[0]["COUNT(sexe)"]+$resultF[0]["COUNT(sexe)"]))*100;
$tab=['Homme'=>round($homme),'Femme'=>round($femme)];
echo json_encode($tab);   
?>