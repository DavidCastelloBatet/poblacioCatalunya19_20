<?php

$type = 'mysql';                  // Tipus de base de dades
$server = 'localhost';            // Servidor on esta la BBDD
$db = 'poblacio_catalunya';       // Nom de la base de dades
$port = '3306';                   // Port de conexio 3306 (MAMP : 8889)
$charset = 'utf8';                // Encoding charset

$username = 'root';               // usuari bbdd
$password = '';                   // password usuari

$options = [                      // Configuració PHP Data Object (PDO)
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];

// Setejo les opcions del PDO (NO MODIFICAR !!!!!!!!!)
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset"; // Creo DSN

try{
  $pdo = new PDO($dsn, $username, $password, $options); // Instancio l'objecte PDO
  //echo 'Conectat';    
} catch (PDOException $e) {
  throw new PDOexception($e->getMessage(), $e->getCode());  // gestiono l'error
}

// DSN, Data Source Name en inglés