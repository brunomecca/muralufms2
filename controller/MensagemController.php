<?php
	class MensagemController{
		public function init(){
			$this->gravarMensagem();
		}

		public function gravarMensagem(){
			require "connect.php";
			if(isset($_SESSION) && $_SESSION['nome'] != ''){
				require "view/mensagem.php";
			}
			else{
				header("Location:index.php");
			}
			

		}
	}
?>