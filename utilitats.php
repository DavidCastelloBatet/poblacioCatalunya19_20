<?php


// funcio per preveure atacs XSS
function html_escape(string $string) : string {
  // la funcio htmlspecialchars()  reemplaça els caracters reservats d'HTML,
  // evitant que es facin correr com a codi
  return htmlspecialchars($string,
    ENT_QUOTES|ENT_HTML5, 'UTF-8', true);

}


// funcio per 
function disconnect ( $pdo, $statment, $statment_poblacions ) {
  global $pdo, $stmt;
  $statment->closeCursor(); // opcional segons versio bbdd
  $statment_poblacions = null; // destrueixo el vincul a les dades
  $statment = null; // destrueixo el víncul a les dades
  $pdo = null; // tanco la conexio a la base de dades
}
