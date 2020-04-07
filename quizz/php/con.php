<?php
    $server="localhost";
    $login="root";
    $pass="welcome";
    $name="quizz";
    $connexion = new PDO("mysql:host=$server;dbname=$name",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
