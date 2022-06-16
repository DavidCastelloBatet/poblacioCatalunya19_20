<?php

include 'conexioBBDD.php';
include 'utilitats.php';


// Rebuda de variables del GET
$poblacioRebuda = $_GET['id'];
$nomRebut = $_GET['poblacio'];


// query
$sql_poblacions_detall = 'SELECT * FROM poblacio_cat_edat_sexe';
$statment_poblacions_detall = $pdo->query($sql_poblacions_detall);
$resultat_poblacions_detall = $statment_poblacions_detall->fetchAll();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Població de Catalunya</title>
</head>
<body>
  <header>
    <h1><?= $nomRebut ?></h1>
  </header>

<div class="taula">


  <table class="table table-striped table-hover ">
    <tr class="table-info">
      <th>REGISTRE</th>
      <th>ANY</th>
      <th>HOMES DE 0 A 14</th>
      <th>DONES DE 0 A 14</th>

    </tr>
    <?php foreach($resultat_poblacions_detall as $poblacio) { ?>

      <?php if($poblacioRebuda == $poblacio['id']) { ?>
      <tr>
        
        <td> <?= html_escape($poblacio['id']) ?> </td>
        <td> <?= html_escape($poblacio['any']) ?> </td>
        <td> <?= html_escape($poblacio['h_0_14_anys']) ?> </td>
        <td> <?= html_escape($poblacio['d_0_14_anys']) ?> </td>
        
      </tr>
      <?php }   ?>

      <?php }  ?>
      
    </table>
  </div>
  

  <?php 

  include 'footer.php' ;

  ?>
