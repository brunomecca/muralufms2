	<?php
		require "view/header.php";
	?>


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				  	<div class="panel-body">
				  		<ul class="list-group">
				  			<a href="?page=minhasmensagens"><li class="list-group-item">Minhas Mensagens</li></a>
				  			<a href="?page=minhasConfig"><li class="list-group-item">Minhas Configurações</li></a>
				  			<a href="?page=meuPerfil"><li class="list-group-item">Meu Perfil</li></a>
				  		</ul>
				  	</div>
			</div>
			
			<div id="panel-admin-mensagens" class="col-md-10">

				<div class="panel panel-default">
				  	<div class="panel-heading"> Minhas Mensagens</div>
					  	<div class="panel-body">
					  	
					  		 <table class="table table-bordered">
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
							    	foreach($minhasMensagens as $lnMsg){


							    ?>


							      <tr>

							      	<td> <?php echo ucfirst($lnMsg['titulo']); ?> </td>
							        <td><?php echo $lnMsg['mensagem']; ?></td>
							        <td><?php echo ucfirst($lnMsg['opiniao']); ?></td>
							        <td><?php echo $lnMsg['data']; ?></td>
							        <td><?php echo $lnMsg['positivo']; ?></td>
							        <td><?php echo $lnMsg['negativo']; ?></td>
							        <td><?php echo $lnMsg['aprovado']; ?></td>

							
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