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
	elseif(isset($_GET['page']) && $_GET['page'] == 'usuario'){
		$controller = new UsuarioController();
	}
	elseif(isset($_GET['page']) && $_GET['page'] == 'mensagens'){
		$controller = new MensagemController();
	}
	elseif(isset($_GET['page']) && $_GET['page'] == 'admin'){
		$controller = new AdminController();
	}

	$controller->init();
?>