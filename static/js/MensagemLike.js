function mensgaemLikePhpAjax(fldLikeParam, tipoLikeParam, idMsgParam) {
   $.ajax({
		type: 'post',
		url:'MensagemLikeController.php',
		data: {idMsg: idMsgParam
			   tipoLike: tipoLikeParam
		}
		complete: function (response) {
			document.getElementById(fldLikeParam).value = response.responseText;
			alert('Sua opinião foi registrada.');
		},
		error: function () {
			alert('Erro ao atualizar a mensagem');
		}
    });  

  return false;
}

function msgPositiveLike(idMsgParam) {
	
	mensgaemLikePhpAjax("txtlikepositive", "1", idMsgParam)	
	return false;
	
}	

function msgNegativeLike(idMsgParam) {
	
	mensgaemLikePhpAjax("txtlikenegative", "-1", idMsgParam)	
	return false;
	
}	
