<?php
	class UsuarioController{
		public function init(){
			if(isset($_GET['page']) && $_GET['page'] == 'usuario')
				$this->cadastrar();
			elseif(isset($_GET['page']) && $_GET['page'] == 'minhasConfig'){
				if(isset($_SESSION)){
					$usuario = new Usuario($_SESSION['email'], 0, $_SESSION['nome'], $_SESSION['usuario'], $_SESSION['id']);
					$this->mostrar($usuario);
				} 
			}
			else{
				if(isset($_SESSION)){
					$usuario = new Usuario($_SESSION['email'], 0, $_SESSION['nome'], $_SESSION['usuario'], $_SESSION['id']);
					$this->alterar($usuario);
				} 
			}
		}

		public function cadastrar(){
			require "connect.php";
			require "view/cadastro.php";

			if(isset($_POST['page'])){
				$usuario = new Usuario($_POST['email'], $_POST['password'], $_POST['nome'], $_POST['username'], 0);
				$situacao = $this->validarCadastro($usuario);
				if($situacao == True){
					echo "<script>alert('Cadastrado com sucesso!')</script>";
 				}
				else{
					echo "<script>alert('Usuário inválido!')</script>";
				}
			}
		}

		public function validarCadastro($usuario){
			if(UsuarioDAO::adicionarNoBanco($usuario) == True){
				return True;
			}
			else{
				return False;
			}
		}

		public function alterar($usuario){
			require "view/minhasConfig.php";
		}

	}
?>