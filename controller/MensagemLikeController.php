<?php
$idMsg = $_POST['idMsg'];
$likeType = $_POST['likeType'];

try{
	if ($likeType == "-1"){
		$updatesql = mysqli_query($link, "UPDATE mensagens SET negativo = negativo + 1 WHERE id = '$idMsg'");
		$selecionaMsg = mysqli_query($link,"SELECT negativo as contalike FROM mensagens WHERE id = '$idMsg'");
	} 
	else {
		$updatesql = mysqli_query($link, "UPDATE mensagens SET positivo = positivo + 1 WHERE id = '$idMsg'");
		$selecionaMsg = mysqli_query($link,"SELECT positivo as contalike FROM mensagens WHERE id = '$idMsg'");
	}	
	
	$conta = @mysqlI_num_rows($selecionaMsg);
	if($conta < 0){
		echo 'Erro: Mensagem não encontrada';  
	} else {
		$lnMsg = mysqli_fetch_array($selecionaMsg));
		echo $lnMsg['contalike'];
	}
}
	catch(Exception $e){
       echo 'Erro ao atualziar a mensagem';
}

?>