<?php

//if ($_POST['submit']) {
    $titre=$_POST['titre'];
    $reponse1=$_POST['reponse1'];
    $reponse2=$_POST['reponse2'];
    $reponse3=$_POST['reponse3'];
    $goodreponse=$_POST['goodreponse'];
    $uploaddir = '/var/www/html/quizz/image/';
    $uploadfile = $uploaddir . basename($_FILES['image']['name']);
    
    echo '<pre>';
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
        echo "Le fichier est valide, et a été téléchargé
               avec succès. Voici plus d'informations :\n";
    } else {
        echo "Attaque potentielle par téléchargement de fichiers.
              Voici plus d'informations :\n";
    }
    
    echo 'Voici quelques informations de débogage :';
    print_r($_FILES);
    
    echo '</pre>';
    
    
    include_once 'con.php';
    $requette="INSERT INTO `question` (`id`, `titre`, `reponse1`, `reponse2`, `reponse3`, `goodreponse`, `image`) 
                VALUES (NULL, '$titre', '$reponse1', '$reponse2', '$reponse3', '$goodreponse', '$newname');";
    echo$requette;
//}
?>