<?php

function html_escape(string $string) : string {
  // la funcio htmlspecialchars()  reemplaça els caracters reservats d'HTML,
  // evitant que es facin correr com a codi
  return htmlspecialchars($string,
    ENT_QUOTES|ENT_HTML5, 'UTF-8', true);

}