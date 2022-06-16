<?php 

include 'conexioBBDD.php';
include 'utilitats.php';

$sql = "SELECT  *
        FROM poblacio_cat_edat_sexe; ";

$statment = $pdo->query($sql);
// Es fa servir per retornar un element
//$poblacions = $statment->fetch();

// Es fa servir  quan retorna un array
$poblacions = $statment->fetchAll();



// LOGICA PAGINACIO
// Quantitat de poblacions mostrades x pagina
$poblacionsPerPagina = 75; 
// averiguo el total de poblacions que em retorna la query
$totalPoblacions = $statment->rowCount();
// calculo les pàgines i redondejo cap amunt
$pagines = ceil($totalPoblacions / $poblacionsPerPagina);
// faig que al carregar sempre hi hagi una pagina activa
if(!$_GET){
        header('Location:index.php?pagina=1');
}
// si es posa al navegador una pagina que no existeix, redirigim...
if($_GET['pagina'] > $poblacionsPerPagina || $_GET['pagina'] <= 0) {
        header('Location:index.php?pagina=1');
}
// calcul de la variable pel canvi de pàgina  !!ull tornar a revisasr !!!
$inici = ($_GET['pagina'] - 1) * $poblacionsPerPagina;
// https://www.youtube.com/watch?v=tRUg2fSLRJo   revisar!!!!!!!
$sql_poblacions = 'SELECT * FROM poblacio_cat_edat_sexe LIMIT :inici , :poblacionsPerPagina ';
$statment_poblacions = $pdo->prepare($sql_poblacions);
$statment_poblacions->bindParam(':inici', $inici, PDO::PARAM_INT);
$statment_poblacions->bindParam(':poblacionsPerPagina', $poblacionsPerPagina, PDO::PARAM_INT);
$statment_poblacions->execute();

$resultat_poblacions = $statment_poblacions->fetchAll();



// VISUALITZACIO DE LA PAGINA
include ('header.php');

(!$poblacions) ? include 'informacio-no-trobada.php' : include 'paginaPrincipal.php';

include ('footer.php');



// desvincular conexions dades i destruir objecte PDO
disconnect ( $pdo, $statment, $statment_poblacions );


?>