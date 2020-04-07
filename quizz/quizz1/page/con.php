<?php
    $server="sql310.epizy.com";
    $login="epiz_25032166";
    $pass="u1116pG7RyvXWmd";
    $name="epiz_25032166_hello";
    $connexion = new PDO("mysql:host=$server;dbname=$name",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
