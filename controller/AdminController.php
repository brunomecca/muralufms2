<?php
	class AdminController{
		public function init(){
			$this->definirMensagem();
		}

		public function definirMensagem(){
			require "connect.php";
			require "view/admin.php";

			
		}

	}
?>