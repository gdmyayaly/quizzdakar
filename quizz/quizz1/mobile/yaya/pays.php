<?php


include_once('../page/con.php');
$req="SELECT * FROM `pays`";
$select=$connexion->query($req);
$result=$select->fetchAll();
$Senegal=$result[0]['Senegal'];
$Afrique=$result[0]['Afrique'];
$Europe=$result[0]['Europe'];
$Ameriques=$result[0]['Ameriques'];
$Asie=$result[0]['Asie'];
$Oceanie=$result[0]['Oceanie'];
$tab=['Senegal'=>$Senegal,'Afrique'=>$Afrique,'Europe'=>$Europe,'Ameriques'=>$Ameriques,'Asie'=>$Asie,'Oceanie'=>$Oceanie];
echo json_encode($tab);   
?>