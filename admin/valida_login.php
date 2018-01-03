<?php
//session_start();
$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];
include '../config/conection.php';
$conect=conectarBD();

//--------------------------------------------------------------------------------------------

$usuario = $conect->prepare("SELECT * FROM usuarios WHERE login='$usuariot' LIMIT 1");
$usuario->execute();
//$resultado = mysql_fetch_assoc($result);
//buscar uma linha ou user
//$usuarioSis=$usuario->fetch();
//percorer um aray
$usuarioSis=$usuario->fetchAll(PDO::FETCH_ASSOC);
//verificar o nivel do administrador
foreach ($usuarioSis as $usuarioList) {
	$nivelAcesso=$usuarioList["nivel_acesso_id"];
	$usuarioSenha=$usuarioList["senha"];
}

if(empty($usuarioSis)){
	//usuario invalido
	$_SESSION['loginErro'] = "<label class='label label-danger'>Usuário Inválido\nVocê não tem permissão para aceder ao sistema</label>";
	//Manda o usuario para a tela de login
	header("Location: ".principal);
}else{
		//verifica se o passowrd combina com o hash da bd
	if(password_verify($senhat, $usuarioSenha)){
		if($nivelAcesso!=1){
$_SESSION['loginErro'] = "<label class='label label-warning'>Você ainda não tem permissão para aceder ao sistema\nAguarde a permissão ou contacte ao administrador</label>";
//Manda o usuario para a tela de login
	header("Location: ".principal);
}else{
	//Define os valores atribuidos na sessao do usuario
	foreach ($usuarioSis as $listar) {
	$_SESSION['usuarioId'] 			= $listar['id'];
	$_SESSION['usuarioNome'] 		= $listar['nome'];
	$_SESSION['usuarioNivelAcesso'] = $listar['nivel_acesso_id'];
	$_SESSION['usuarioLogin'] 		= $listar['login'];
	$_SESSION['usuarioSenha'] 		= $listar['senha'];
	$_SESSION['usuarioFoto']		= $listar['fotoUser'];
}
	
	if($nivelAcesso == 1){
		header("Location: ".principal);
	}
}
	}else{
		$_SESSION['loginErro'] = "<label class='label label-danger'>Senha Inválida</label>";
		//Manda o usuario para a tela de login
		header("Location: ".principal);
	}
}
?>