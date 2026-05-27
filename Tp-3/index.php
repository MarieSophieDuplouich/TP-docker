<?php

$DATABASE_HOST = getenv("DATABASE_HOST") ?: "bdd"; 
$DATABASE_NAME = getenv("DATABASE_NAME") ?: "ma-bdd";
$DATABASE_USER = getenv("DATABASE_USER") ?: "root";
$DATABASE_PASS = getenv("DATABASE_PASS") ?: "root";
$bdd = new PDO("mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME",$DATABASE_USER,$DATABASE_PASS);
var_dump($bdd);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Test de connexion à la base de données</h1>
  <p>Si vous voyez un objet PDO, la connexion à la base de données a réussi.</p>
</body>
</html>