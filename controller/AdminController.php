<?php
	class AdminController{
		public function init(){
			
			if(isset($_GET['page']) && ($_GET['page'] == 'adminMensagens' || $_GET['page'] == 'admin')) 
				require "view/adminMensagens.php";
			elseif(isset($_GET['page']) && $_GET['page'] == 'adminUsuarios')
				require "view/adminUsuarios.php";


		}

		public function definirMensagem(){
			require "connect.php";



			
		}

	}
?>