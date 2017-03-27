	<?php
		require "view/header.php";
	?>


	<div class="container-fluid minhas-mensagens-page">
		<div class="row">
			
			<div id="panel-admin-mensagens" class="col-md-12">

				<div class="panel panel-default">
				  	<div class="panel-heading"> Minhas Mensagens</div>
					  	<div class="panel-body">
					  	
					  		 <table id="table-minhas-mensagens" class="table table-bordered ">
							    <thead>
							      <tr>
							      	<th>Titulo</th>
							        <th>Mensagem</th>
							        <th>Opinião</th>
							        <th>Data de criação</th>
							        <th>Likes</th>
							        <th>Dislikes</th>
							        <th>Status</th>
							      </tr>
							    </thead>
							    <tbody>


							    <?php
							    	//a variavel numero é necessaria para criarmos um modal para cada mensagem
							    	$numero = 0;

							    	foreach($minhasMensagens as $lnMsg){


							    ?>


							      <tr>

							      	<td><?php echo ucfirst(limitar($lnMsg['titulo'], 50)); ?></td>
							        <td><?php echo limitar($lnMsg['mensagem'], 150); ?>...
							        <!-- verifica o tamanho da mensagem para entao saber se o 
							      	botao de ler mais aparecera -->

							      	<?php



							      		if(strlen($lnMsg['mensagem']) > 100)///mostra o botao
							      		{ ?>

							      		   <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#mensagem<?php echo $numero;?>  ">Ler Mais</button>
							      		   

										  <div class="modal fade" id="mensagem<?php echo $numero;?>" role="dialog">
										    <div class="modal-dialog modal-lg">
										      <div class="modal-content">
										        <div class="modal-header">
										          <button type="button" class="close" data-dismiss="modal">&times;</button>
										          <h4 class="modal-title"><?php echo $lnMsg['titulo'];?></h4>
										        </div>
										        <div class="modal-body">
										          <p><?php echo $lnMsg['mensagem'];?></p>
										        </div>
										        <div class="modal-footer">
										          <button type="button" class="btn btn-sml btn-default" data-dismiss="modal">Fechar</button>
										        </div>
										      </div>
										    </div>
										  </div>
										</div>


							      		<?php}
							      		else//nao mostra o botao
							      		{?>

							      		<?php

							      	}//chave do else

							      	$numero = $numero + 1;

							      	?>		
							        </td>
							        <td><?php echo ucfirst($lnMsg['opiniao']); ?></td>
							        <td><?php echo $lnMsg['data']; ?></td>
							        <td><?php echo $lnMsg['positivo']; ?></td>
							        <td><?php echo $lnMsg['negativo']; ?></td>
							        <td><?php if($lnMsg['aprovado'] == '1') echo 'Aprovado'; else echo 'Sob Avaliação'; ?></td>
							
							      </tr>
							     

							     <?php


							     	}//chave do for-each
							     
							     ?>
							    </tbody>
							  </table>
					  	</div>
				
				</div>
			</div>

		</div>
	</div>

<?php
	require "view/footer.php";
?>