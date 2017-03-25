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

		function logout(){

		}
	}
	
?>