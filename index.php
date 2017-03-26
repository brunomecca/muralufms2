<?php
	session_start();
	require_once "model/MensagemDAO.php";
	require_once "model/UsuarioDAO.php";
	require_once "controller/HomeController.php";
	require_once "controller/LoginController.php";
	require_once "func/funcoes.php";




	if(!isset($_GET['page']) || $_GET['page'] == ''){
		$controller = new HomeController();
	}
	elseif(!isset($_GET['page']) || $_GET['page'] == 'login'){
		$controller = new LoginController();
	}
	elseif(!isset($_POST['page']) || $_POST['page'] == 'login'){
		$controller = new LoginController();
	}
	elseif(!isset($_GET['page']) || $_GET['page'] == 'usuario')
		$controller = new UsuarioController();
	elseif(!isset($GET['page']) || $_GET['page'] == 'mensagem')
		$controller = new MensagemController();


	$controller->init();
?>