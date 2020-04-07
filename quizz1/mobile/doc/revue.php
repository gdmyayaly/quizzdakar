<?php
    include_once('../page/con.php');
    $week = date('W');
    $req="SELECT * FROM `Paricipants` WHERE `wekknumber`=$week";
    $select=$connexion->query($req);
    $result=$select->fetchAll();
    if (!$result) {
        $tab=['currentlundi'=>0,'currentmardi'=>0,
        'currentmercredi'=>0,'currentjeudi'=>0,
        'currentvendredi'=>0,'currentsamedi'=>0,
        'currentdimanche'=>0,
        'previouslundi'=>$result1[0]['lundi'],'previousmardi'=>$result1[0]['mardi'],
        'previousmercredi'=>$result1[0]['mercredi'],'previousjeudi'=>$result1[0]['jeudi'],
        'previousvendredi'=>$result1[0]['vendredi'],'previoussamedi'=>$result1[0]['samedi'],
        'previousdimanche'=>$result1[0]['dimanche']];
        echo json_encode($tab);
    }
    else {
        $a=$week-1;
        $req="SELECT * FROM `Paricipants` WHERE `wekknumber`=$a";
        $select=$connexion->query($req);
        $result1=$select->fetchAll();
        $tab=['currentlundi'=>$result[0]['lundi'],'currentmardi'=>$result[0]['mardi'],
        'currentmercredi'=>$result[0]['mercredi'],'currentjeudi'=>$result[0]['jeudi'],
        'currentvendredi'=>$result[0]['vendredi'],'currentsamedi'=>$result[0]['samedi'],
        'currentdimanche'=>$result[0]['dimanche'],
        'previouslundi'=>$result1[0]['lundi'],'previousmardi'=>$result1[0]['mardi'],
        'previousmercredi'=>$result1[0]['mercredi'],'previousjeudi'=>$result1[0]['jeudi'],
        'previousvendredi'=>$result1[0]['vendredi'],'previoussamedi'=>$result1[0]['samedi'],
        'previousdimanche'=>$result1[0]['dimanche']];
        echo json_encode($tab);
    }
?>