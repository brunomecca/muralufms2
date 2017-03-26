<?php
	class UsuarioDAO{
		public static function adicionarNoBanco($usuario){
			require "connect.php";
			$nome = $usuario->getNome();
			$email = $usuario->getEmail();
			$senha = $usuario->getSenha();
			$username = $usuario->getUsername();
			$admin = 0;
			$inseresql = mysqli_query($link, "INSERT INTO usuarios (nome, email, senha, usuario, admin) VALUES ('$nome', '$email', '$senha', '$username', '$admin')");

			if($inseresql == True){
				return True;
			}
			else{
				return False;
			}
		}

		public static function puxarDoBanco(){
			require "connect.php";
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
				if($lnMsg['admin'] == 1)
					$usuario->admin = True;
				return $usuario;
			}
			return new Usuario(null,null,null,null,null);
		}


		public static function atualizarUsuario($usuario){
			require "connect.php";
			$id = $usuario->getId();
			$nome = $usuario->getNome();
			$username = $usuario->getUsername();
			$email = $usuario->getEmail();
			mysqli_query($link, "UPDATE usuarios SET usuario = '$username', nome = '$nome' , email = '$email' WHERE id = '$id'");
		}



		public static function remover($id){
			require "connect.php";
			$selecionaUser = mysqli_query($link, "DELETE FROM usuarios WHERE id = '$id'");
		}

		public static function definirAdm($id){
			require "connect.php";
			$selecionaUser = mysqli_query($link, "UPDATE usuarios SET admin = '1' WHERE id = '$id'");
		}
	}
?>