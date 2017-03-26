<?php
	class LoginController{
		public function init() {
			if(isset($_GET['page']) && $_GET['page'] == 'sair'){
				$this->logout();
			}
			if(!isset($_SESSION['usuario'])){
				$this->loginPage();
			}
			else{
				header("Location:index.php");
			}
	    }

		function loginPage(){
			require "connect.php";
			require "view/login.php";
			if(isset($_POST['page'])){
				$usuario = $this->login($_POST['email'], $_POST['password']);
				if($usuario->getNome() != null){
					$usuario = UsuarioDAO::achaUsuario($usuario->getEmail());
					$_SESSION['nome'] = ucfirst($usuario->getNome());
					$_SESSION['email'] = $usuario->getEmail();
					$_SESSION['usuario'] = $usuario->getUsername();
					$_SESSION['id'] = $usuario->getId();
					if($usuario->admin == True)
						$_SESSION['admin'] = True;
					else
						$_SESSION['admin'] = False;
					header("Location:index.php");
 				}
				else{
					echo "<script>alert('Usuário inválido!')</script>";
				}
			}
		}

		function login($email, $password)
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
			$usuario = new Usuario($email, $password, 0, 0, 0);
			$usuarioResultado = $this->verificaLogin($usuario);
			return $usuarioResultado;
		}

		function verificaLogin($usuario){
			$senha = $usuario->getSenha();

			$usuario = UsuarioDAO::achaUsuario($usuario->getEmail());
			if($senha == $usuario->getSenha())
				return $usuario;
			else
				return new Usuario(null,null,null,null,null);
	
		}

		function logout(){
			unset($_SESSION['nome']);
			unset($_SESSION['email']);
			unset($_SESSION['usuario']);
			unset($_SESSION['id']);
			session_destroy();
			header("Location:index.php");
		}


	}
	
?>