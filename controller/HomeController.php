<?php
	require "model/MensagemDAO.php";
	require "model/UsuarioDAO.php";
	require "connect.php";

	class HomeController{
		var $usuario;
		public function init() {

	        if (isset($_GET['op'])) {
	            $op = $_GET['op'];
	        } else {
	            $op = "";
	        }

	        switch ($op) {
	            case 'login':
	                require 'view/login.php';
	                break;
	            case 'cadastra':
	                require 'view/cadastro.php';
	                break;
	            default:
	               	require 'view/index.php';
	                break;
	        }
	    }
		function enviarMensagem(){

			$mensagens = MensagemDAO::puxarDoBanco($link);
		}

		function login(){
			if($_SESSION['username'] != '')
				$usuario = True;
			else
				$usuario = False;
		}

		function logout(){

		}
	}
	
?>