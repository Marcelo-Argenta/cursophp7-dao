<?php 

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

//carrega um usuario 
/*
$root = new Usuario();

$root->loadbyId(4);

echo $root;
*/


/*
//Carrega uma lista de usuarios.
$lista = Usuario::getList();
echo json_encode($lista);
*/

//carrega um lista de usuario buscando pelo login

/*
$search = Usuario::search("o");
echo json_encode($search);
*/


//carrega um usuario com login e senha.
//$usuario = new Usuario();
//$usuario->login("root", "!55");
//echo $usuario;



/*
//INSERE UM USUARIO POR stored procedure
$aluno = new Usuario("aluno","@lun0");


$aluno->insert();

echo $aluno;
*/


$usuario = new Usuario();

$usuario->loadById(9);

$usuario->update("professor", "1235");

echo $usuario;





 ?>