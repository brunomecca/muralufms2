<?php
	session_start();
	require_once "model/Usuario.php";
	require_once "model/Mensagem.php";
	require_once "model/MensagemDAO.php";
	require_once "model/UsuarioDAO.php";
	require_once "controller/HomeController.php";
	require_once "controller/LoginController.php";
	require_once "controller/UsuarioController.php";
	require_once "controller/MensagemController.php";
	require_once "controller/AdminController.php";
	require_once "func/funcoes.php";

	if(!isset($_GET['page']) || $_GET['page'] == ''){
		$controller = new HomeController();
	}
	elseif(isset($_GET['page']) && $_GET['page'] == 'login' || $_GET['page'] == 'sair'){
		$controller = new LoginController();
	}
	elseif(isset($_GET['page']) && $_GET['page'] == 'usuario' || $_GET['page'] == 'minhasConfig' || $_GET['page'] == 'meuPerfil'){
		$controller = new UsuarioController();
	}
	elseif(isset($_GET['page']) && $_GET['page'] == 'mensagens' || $_GET['page'] == 'minhasmensagens'){
		$controller = new MensagemController();
	}
	elseif(isset($_GET['page']) && $_GET['page'] == 'admin' || $_GET['page'] == 'adminMensagens' || $_GET['page'] == 'avaliarUsuarios'){
		$controller = new AdminController();
	}
	if(isset($_GET['remove'])){
		$controller = new AdminController();
	}
	elseif(isset($_GET['aceita'])){
		$controller = new AdminController();
	}
	if(isset($_GET['exclui'])){
		$controller = new AdminController();
	}
	elseif(isset($_GET['definir'])){
		$controller = new AdminController();
	}

	$controller->init();
?>