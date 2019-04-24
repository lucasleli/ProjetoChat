<?php 

require_once("config.php");

//////////////////////////////////////////

/*
$search = Usuario::search("pe"); //Realiza pesquisa de usuários pelo login

echo json_encode($search);
*/

////////////////////////////////////////

/*
$usuario = new Usuario(); // Realiza a pesquisa por cadastro por meio de autenticação Login/Senha
$usuario->login("lucas", "1997");

echo $usuario;
*/

///////////////////////////////////////

/*
$aluno = new Usuario("teste2", "484s"); // Cadastra um novo usuário, precisando adiocionar apenas o LOGIN e SENHA

$aluno->insert();

echo $aluno;
*/


///////////////////////////////////////

/*
$usuario = new Usuario(); // Altera dados do cadastro, neste caso altera apenas as credenciais

$usuario->loadById(6);

$usuario->update("kyma", "4871");

echo $usuario;
*/

//////////////////////////////////////

/*
$usuario = new Usuario(); // Apaga cadastro do banco, precisando apenas passar o ID

$usuario->loadById(7);

$usuario->delete();

echo $usuario;
*/

//////////////////////////////////////

$arquivo = new FileManager(); // Apaga um diretório (pasta)

$arquivo->apagarPasta("lucas");

 ?>