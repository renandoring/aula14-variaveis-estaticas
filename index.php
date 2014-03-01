<?php
/*VARIAVEL ESTATICA: ESTA RELACIONADO A CLASSE , ESTA VARIAVEL EH COMPARTILHADA COM TODA A CLASSE
  METODO ESTATICO: ESTA RELACIONADO A CLASSE
  */

 include_once 'Catalog.class.php';
 
$catalogo = new Catalogo('Photoshop');
new Catalogo('Dreamweaver');
new Catalogo('Fireworks');
new Catalogo('Flash');

echo 'Total do indice: '.Catalogo::$Indice. "\n";

$infSotw = Catalogo::Informacoes(1);
?>
