<?php 

require_once("config.php");

$pesquisa = new Usuario();

$pesquisa->loadById(2);

echo $pesquisa;
 ?>