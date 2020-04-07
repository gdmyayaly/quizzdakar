<?php
    $server="localhost";
    $login="root";
    $pass="welcome";
    $connexion = new PDO("mysql:host=$server;dbname=grow",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
