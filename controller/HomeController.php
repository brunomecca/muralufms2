<?php
	class HomeController{
		public function init() {
	        $this->enviarMensagem(); 
	    }

		function enviarMensagem(){
			require "connect.php";
			$homeMensagens = MensagemDAO::puxarDoBanco($link);
			require "view/index.php";
		}

		function logout(){

		}
	}
	
?>