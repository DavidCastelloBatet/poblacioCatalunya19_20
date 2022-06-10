<?php 

include 'conexioBBDD.php';
include 'preventXSS.php';

$sql = "SELECT  id,
                any,
                nom_poblacio,
                codi_poblacio
        FROM poblacio_cat_edat_sexe
        WHERE id > 500 AND any = 2019
        LIMIT 10; ";

$statment = $pdo->query($sql);

// Es fa servir per retornar un element
//$poblacions = $statment->fetch();

// Es fa servir  quan retorna un array
$poblacions = $statment->fetchAll();


include 'header.php';

(!$poblacions) ?  include 'informacio-no-trobada.php' : include 'paginaPrincipal.php';

include 'footer.php';

?>
