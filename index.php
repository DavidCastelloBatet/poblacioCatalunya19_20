<?php 

include 'conexioBBDD.php';
include 'utilitats.php';

$sql = "SELECT  id,
                any,
                nom_poblacio,
                codi_poblacio
        FROM poblacio_cat_edat_sexe
        WHERE id > 0 AND any = 2020
        LIMIT 10; ";

$statment = $pdo->query($sql);

// Es fa servir per retornar un element
//$poblacions = $statment->fetch();

// Es fa servir  quan retorna un array
$poblacions = $statment->fetchAll();


include 'header.php';

(!$poblacions) ? include 'informacio-no-trobada.php' : include 'paginaPrincipal.php';

include 'footer.php';

// desvincular conexio dades i destruir objecte PDO
disconnect ( $pdo, $statment );




// Preguntar Xavi com saber si la conexio esta tancada....  FET!

// Exemples paginacio:

// https://parzibyte.me/blog/2020/06/24/paginacion-php-mysql/

// https://code.tutsplus.com/es/tutorials/how-to-paginate-data-with-php--net-2928

// https://www.youtube.com/watch?v=Fqg0eOUMqYg
?>