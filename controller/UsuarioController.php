<?php
	class UsuarioController{
		public function init(){
			$this->cadastrar();
		}

		public function cadastrar(){
			require "connect.php";
			require "view/cadastro.php";

			if(isset($_POST['page'])){
				$usuario = new Usuario($_POST['email'], $_POST['password'], $_POST['nome'], $_POST['username']);
				$situacao = $this->validarCadastro($usuario);
				if($situacao == True){
					echo '<div class="alert alert-success" role="alert">Enviado com sucesso!</div>';
 				}
				else{
					echo "<div class='alert alert-danger' role='alert'>Não cadastrado!</div>";
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

		public function mostrar($usuario){

		}

		public function alterar($usuario){

		}

	}
?>