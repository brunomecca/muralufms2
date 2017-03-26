<?php
	class AdminController{
		public function init(){
			if(isset($_SESSION) && $_SESSION['admin'] == True){
				if(isset($_GET['page']) && ($_GET['page'] == 'adminMensagens' || $_GET['page'] == 'admin')) 
					$this->definirMensagem();
				elseif(isset($_GET['page']) && $_GET['page'] == 'avaliarUsuarios')
					$this->definirUsuario();
				
				if(isset($_GET['remove'])){
					$this->remover($_GET['remove']);
				}
				elseif(isset($_GET['aceita'])){
					$this->aceitar($_GET['aceita']);
				}

				if(isset($_GET['definir'])){
					$this->definir($_GET['definir']);
				}
				elseif(isset($_GET['exclui'])){
					$this->excluir($_GET['exclui']);
				}
			}
			else
				header("Location:index.php");
		}

		public function definirMensagem(){
			$mensagensReprovadas = MensagemDAO::puxarDoBancoReprovadas();

			require "view/adminMensagens.php";

		}

		public function remover($id){
			MensagemDAO::removerMensagem($id);
			header("Location:?page=admin");
		}

		public function aceitar($id){
			MensagemDAO::aceitarMensagem($id);
			header("Location:?page=admin");
		}

		public function definirUsuario(){
			$usuarios = UsuarioDAO::puxarDoBanco();
			require "view/adminUsuarios.php";

		}

		public function excluir($id){
			UsuarioDAO::remover($id);
			header("Location:?page=avaliarUsuarios");
		}

		public function definir($id){
			UsuarioDAO::definirAdm($id);
			header("Location:?page=avaliarUsuarios");
		}
	}
?>