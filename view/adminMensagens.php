	<?php
		require "view/header.php";
	?>

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-2">

					<h3>Menu do Adm</h3>
				  	<div class="panel-body">
				  		<ul class="list-group">
                            <li class="list-group-item"><a href="?page=admin">Avaliar Mensagens</a></li>
                            <li class="list-group-item"><a href="?page=avaliarUsuarios">Avaliar Usuários</a></li>
				  		</ul>
				  	</div>
			</div>


			<div id="panel-admin-mensagens" class="col-md-10">

				<div class="panel panel-default">
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
							        <th>Ação</th>
							      </tr>
							    </thead>
							    <tbody>


							    <?php
							    	foreach($mensagensReprovadas as $lnMsg){


							    ?>


							      <tr>

							      	<td><?php echo ucfirst($lnMsg['titulo']); ?> </td>
							        <td><?php echo limitar($lnMsg['mensagem'], 350); ?></td>
							        <td><?php echo ucfirst($lnMsg['opiniao']); ?></td>
							        <td><?php echo $lnMsg['data']; ?></td>
							        <td><?php echo $lnMsg['positivo']; ?></td>
							        <td><?php echo $lnMsg['negativo']; ?></td>
							        <td><?php if($lnMsg['aprovado'] == '1') echo 'Aprovado'; else echo 'Reprovado'; ?></td>
							        <td>
							        <p><a href="?aceita=<?php echo $lnMsg['id'];?>">
							        	<button class="btn-xsm btn-success">Aprovar</button>
						        	</a></p>
									<a href="?remove=<?php echo $lnMsg['id'];?>">
							       		<button class="btn-xsm btn-danger">Reprovar</button>
						       		</a>
						        	</td>
							
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






	<?php
		require "view/footer.php";
	?>