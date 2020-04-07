<?php
    $donner=$_GET['donner'];
    include_once('con.php');
    // $server="localhost";
    // $login="root";
    // $pass="welcome";
    // $connexion = new PDO("mysql:host=$server;dbname=grow",$login,$pass);
    // $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
        $req="SELECT * FROM `alluser`";
        $select=$connexion->query($req);
        $result=$select->fetchAll();
        $visiteur=$result[0]['visiteur'];
        $online=$result[0]['online'];
        $joueur=$result[0]['joueur'];
        $inscrit=$result[0]['inscrit'];
        $michemin=$result[0]['michemin'];
        $jaimefacebook=$result[0]['jaimefacebook'];
        $partagefacebook=$result[0]['partagefacebook'];
        $partagetwitter=$result[0]['partagetwitter'];
        $partagewhatsapp=$result[0]['partagewhatsapp'];
        $suivrefacebook=$result[0]['suivrefacebook'];
        $suivretwitter=$result[0]['suivretwitter'];
        $suivrelinkdind=$result[0]['suivrelinkdind'];
        $suivreyoutube=$result[0]['suivreyoutube'];
        $suivreinstagramme=$result[0]['suivreinstagramme'];
        
        if ($donner=="visiteur") {
            //ici on incrémente les visiteur
            $visiteur=$visiteur+1;
            $requette="UPDATE `alluser` SET `visiteur` = $visiteur WHERE `alluser`.`id` = 1;";
        }
        elseif ($donner=="new") {
            $req="SELECT * FROM `alluser`";
            $select=$connexion->query($req);
            $result=$select->fetchAll();
            $device=$_GET['device'];
            $nbr=$result[0][$device];
            
            $requette="UPDATE `device` SET `visiteur` = $visiteur WHERE `device`.`id` = 1;";
        }
        elseif ($donner=="endgame") {
            // le joueur fini le jeux
            $joueur=$joueur+1;
            $michemin=$michemin-1;
            $requette="UPDATE `alluser` SET `joueur` = $joueur,`michemin` = $michemin WHERE `alluser`.`id` = 1;";
        }
        elseif ($donner=="michemin") {
            //ici on incrémente mi chemin
            $michemin=$michemin+1;
            $requette="UPDATE `alluser` SET `michemin` = $michemin WHERE `alluser`.`id` = 1;";
        }
        elseif ($donner=="inscrit") {
            //ici on decrement mi chemin et on incrémente
           // $michemin=$michemin-1;
            $inscrit=$inscrit+1;
            $requette="UPDATE `alluser` SET `inscrit` = $inscrit WHERE `alluser`.`id` = 1;";
        }
        elseif ($donner=="save") {
            $prenom=$_GET['prenom'];
            $nom=$_GET['nom'];
            $numero=$_GET['telephone'];
            $age=$_GET['age'];
            $sexe=$_GET['sexe'];
            $insertion=$connexion->prepare(
                "INSERT INTO personne(prenom,nom,telephone,age,sexe)
                VALUES(:pre,:nom,:num,:age,:sexe)
                ");
                $insertion->bindParam(':pre',$prenom);
                $insertion->bindParam(':nom',$nom);
                $insertion->bindParam(':num',$numero);
                $insertion->bindParam(':age',$age);
                $insertion->bindParam(':sexe',$sexe);
                $insertion->execute();
        }
        elseif ($donner=="pays") {
            $nation=$_GET['nation'];
            $req="SELECT * FROM `pays`";
            $select=$connexion->query($req);
            $result=$select->fetchAll();
            $a=$result[0][$nation];
            $a=$a+1;
            $requette="UPDATE `pays` SET `$nation` = $a WHERE `pays`.`id` = 1;";
        }
        elseif ($donner=="newweek") {
            $week = date('W');
            $yeard = date('Y');
            setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
            $day=strftime("%A"); 
          //  include_once('../page/con.php');
            $req1="SELECT COUNT(*) FROM `Paricipants`";
            $select=$connexion->query($req1);
            $result=$select->fetchAll();
            $nbr=$result[0]["COUNT(*)"];
            $req1="SELECT * FROM `Paricipants`";
            $select=$connexion->query($req1);
            $result=$select->fetchAll();
            $id=$result[$nbr-1]['id'];
            print_r($id);
            $req2="SELECT * FROM `Paricipants` WHERE id=$id";
            $select=$connexion->query($req2);
            $result=$select->fetchAll();

            $lastweek=$result[0]["wekknumber"];
            if ($lastweek==$week) {
                $nombre=$result[0][$day];
                $nombre=$nombre+1;
                $requette="UPDATE `Paricipants` SET `$day` = $nombre WHERE `Paricipants`.`id` = $id;";
                $insertion-=$connexion->query($requette);
                $insertion->execute();
            }
            elseif ($lastweek!=$week) {
                if ($day=="lundi") {
                    $request="INSERT INTO `Paricipants` (`id`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`, `wekknumber`, `annee`) VALUES (NULL, '1', '0', '0', '0', '0', '0', '0', '$week', '$yeard');";
                }
                elseif ($day=="mardi") {
                    $request="INSERT INTO `Paricipants` (`id`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`, `wekknumber`, `annee`) VALUES (NULL, '0', '1', '0', '0', '0', '0', '0', '$week', '$yeard');";
                }
                elseif ($day=="mercredi") {
                    $request="INSERT INTO `Paricipants` (`id`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`, `wekknumber`, `annee`) VALUES (NULL, '0', '0', '1', '0', '0', '0', '0', '$week', '$yeard');";
                }
                elseif ($day=="jeudi") {
                    $request="INSERT INTO `Paricipants` (`id`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`, `wekknumber`, `annee`) VALUES (NULL, '0', '0', '0', '1', '0', '0', '0', '$week', '$yeard');";
                }
                elseif ($day=="vendredi") {
                    $request="INSERT INTO `Paricipants` (`id`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`, `wekknumber`, `annee`) VALUES (NULL, '0', '0', '0', '0', '1', '0', '0', '$week', '$yeard');";
                }
                elseif ($day=="samedi") {
                    $request="INSERT INTO `Paricipants` (`id`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`, `wekknumber`, `annee`) VALUES (NULL, '0', '0', '0', '0', '0', '1', '0', '$week', '$yeard');";
                }
                elseif ($day=="dimanche") {
                    $request="INSERT INTO `Paricipants` (`id`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`, `wekknumber`, `annee`) VALUES (NULL, '0', '0', '0', '0', '0', '0', '1', '$week', '$yeard');";
                }
                $insertion-=$connexion->query($request);
                $insertion->execute();
            }
        }
            $insertion-=$connexion->query($requette);
            $a=$insertion->execute();
    }   catch (PDOException $e) {
        echo"Erreur".$e->getMessage();
    }
?>