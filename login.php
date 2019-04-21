<?php 

session_start();

$login = "lucas";
$senha = 1997;

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios WHERE deslogin = $login AND dessenha = $senha");

$stmt->execute();

if (count($stmt) > 0 )
{
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	header('location:site.php');
} 
else {
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	header('location:index.php');
}

 ?>