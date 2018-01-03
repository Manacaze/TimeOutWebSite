<?php
ob_start();
	if(((!isset($_SESSION['usuarioId'])) ||($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNome'] == "") || ($_SESSION['usuarioNivelAcesso'] == "") || (($_SESSION['usuarioNivelAcesso'] !=1) && ($_SESSION['usuarioNivelAcesso'] !=2)) || ($_SESSION['usuarioLogin'] == "") || ($_SESSION['usuarioSenha'] == "")) && !in_array($caminho[0], $paginasSessao)){
		unset($_SESSION['usuarioId'],			
			  $_SESSION['usuarioNome'], 		
			  $_SESSION['usuarioNivelAcesso'], 
			  $_SESSION['usuarioLogin'], 		
			  $_SESSION['usuarioSenha']);
		//Mensagem de Erro
		$_SESSION['loginErro'] = "<label class='label label-info'>Área restrita para usuários cadastrados</label>";
		
		//Manda o usuário para a tela de login
		header("Location: ".principal."signin");
	}
