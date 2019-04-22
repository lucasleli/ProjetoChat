<?php 

require_once("config.php");

//////////////////////////////////////////
/*
$search = Usuario::search("pe"); //Realiza pesquisa de usuários pelo login

echo json_encode($search);
*/

////////////////////////////////////////

$usuario = new Usuario(); // Realiza a pesquisa por cadastro por meio de autenticação Login/Senha
$usuario->login("lucas", "1997");

echo $usuario;

///////////////////////////////////////


 ?>