<?php
	class MensagemDAO{

		public static function adicionarNoBanco($mensagem){
			require "connect.php";
			$titulo = $mensagem->getTitulo();
			$relato = $mensagem->getMensagem();
			$aprovado = 0;
			$id_usuario = $mensagem->getIdUsuario();
			$opiniao = $mensagem->getOpiniao();
			$positivo = 0;
			$negativo = 0;

			date_default_timezone_set('America/Cuiaba');
			$dia = date("d");
			$mes = date("m");
			$ano = date("Y");

			$data = $dia . '/' . $mes . '/' . $ano;

			$inseresql = mysqli_query($link, "INSERT INTO mensagens (id_usuario, titulo, mensagem, opiniao, positivo, negativo, aprovado, data) VALUES ('$id_usuario', '$titulo', '$relato', '$opiniao','$positivo','$negativo', '$aprovado', '$data')");
			if($inseresql == True)
				return True;
			else
				return False;
		}

		public static function puxarDoBanco(){
			require "connect.php";
			$consulta = mysqli_query($link, "SELECT * FROM mensagens WHERE aprovado = 1 ORDER BY id DESC ");
			return $consulta;
		}
	}
?>