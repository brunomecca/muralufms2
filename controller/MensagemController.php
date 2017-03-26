<?php
	class MensagemController{
		public function init(){
			if(isset($_GET['page']) && $_GET['page'] == 'minhasmensagens')
				$this->minhasMensagens();
			else
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
			
			if(isset($_POST['acao'])){
				$mensagem = new Mensagem($_POST['titulo'], $_POST['mensagem'], $_POST['opiniao'],$_SESSION['id'], 0, 0);
				if(MensagemDAO::adicionarNoBanco($mensagem) == True){
					echo "<script>alert('Enviado com sucesso!')</script>";
				}
				else{
					echo "<script>alert('Não cadastrado!')</script>";
				}
			}

		}

		public function minhasMensagens(){
			if(isset($_SESSION) && $_SESSION['nome'] != ''){
				$minhasMensagens = MensagemDAO::puxarDoBancoUsuario($_SESSION['id']);
				require "view/minhasMensagens.php";
			}
			else{
				header("Location:index.php");
			}


		}
	}
?>