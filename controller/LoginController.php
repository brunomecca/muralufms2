<?php
	class LoginController{
		public function init() {
			if(!isset($_SESSION['usuario'])){
				$this->enviarMensagem();
			}
			else{
				header("Location:index.php");
			}
	    }

		function enviarMensagem(){
			require "connect.php";
			$homeMensagens = MensagemDAO::puxarDoBanco($link);
			require "view/login.php";
		}


		function login()
		{

			$email = $_POST['email'];
			$password = $_POST['password'];
			$usuario = new Usuario($email,$password);

			//$usuarioResultado = UsuarioDao->adicionaNoBanco($usuario);
			$usuarioResultado = True;

			if($usuarioResultado == True)
			{
				require "view/index.php";
			}
			else
			{
				require "view/login.php";
			}
		}

		function logout(){}


	}
	
?>