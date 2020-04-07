<?php
include_once('../page/con.php');
$requette1="SELECT COUNT(age) FROM `personne` WHERE age<20;";
$requette2="SELECT COUNT(age) FROM `personne` WHERE age>=20 AND age<40;";
$requette3="SELECT COUNT(age) FROM `personne` WHERE age>=40;";
$select=$connexion->query($requette1);
$result1=$select->fetchAll();
$select=$connexion->query($requette2);
$result2=$select->fetchAll();
$select=$connexion->query($requette3);
$result3=$select->fetchAll();
$premier=(($result1[0]["COUNT(age)"])/($result1[0]["COUNT(age)"]+$result2[0]["COUNT(age)"]+$result3[0]["COUNT(age)"]))*100;
$second=(($result2[0]["COUNT(age)"])/($result1[0]["COUNT(age)"]+$result2[0]["COUNT(age)"]+$result3[0]["COUNT(age)"]))*100;
$troisieme=(($result3[0]["COUNT(age)"])/($result1[0]["COUNT(age)"]+$result2[0]["COUNT(age)"]+$result3[0]["COUNT(age)"]))*100;
// $homme=($resultH[0]["COUNT(sexe)"]/($resultH[0]["COUNT(sexe)"]+$resultF[0]["COUNT(sexe)"]))*100;
// $femme=($resultF[0]["COUNT(sexe)"]/($resultH[0]["COUNT(sexe)"]+$resultF[0]["COUNT(sexe)"]))*100;
$tab=['0-20'=>$premier,'20-40'=>$second,'40+'=>$troisieme];
echo json_encode($tab);   
?>