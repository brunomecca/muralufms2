<?php
	class UsuarioDAO{
		public static function adicionarNoBanco($usuario){
			require "connect.php";
			$nome = $usuario->getNome();
			$email = $usuario->getEmail();
			$senha = $usuario->getSenha();
			$username = $usuario->getUsername();

			$inseresql = mysqli_query($link, "INSERT INTO usuarios (nome, email, senha, usuario) VALUES ('$nome', '$email', '$senha', '$username')");

			if($inseresql == True){
				return True;
			}
			else{
				return False;
			}
		}

		public static function puxarDoBanco(){
			$consulta = mysqli_query($link, "SELECT * FROM usuarios ORDER BY id DESC");
			return $consulta;
		}
		public static function achaUsuario($email){
			require "connect.php";
			$selecionaUser = mysqli_query($link, "SELECT * FROM usuarios WHERE email = '$email'");
			$conta = @mysqli_num_rows($selecionaUser);
			if($conta > 0){
				$lnMsg = mysqli_fetch_array($selecionaUser);
				$usuario = new Usuario($lnMsg['email'], $lnMsg['senha'], $lnMsg['nome'], $lnMsg['usuario'], $lnMsg['id']);
				return $usuario;
			}
			return new Usuario(null,null,null,null);
		}


		public static function verificaLogin($usuario){

		}
	}
?>