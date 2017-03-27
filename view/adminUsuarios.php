	<?php
		require "header.php";
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
							      	<th>Nome</th>
							        <th>Email</th>
							        <th>Usuario</th>
							        <th>Admin</th>
							        <th>Decisão</th>
							      </tr>
							    </thead>
							    <tbody>


							    <?php
							    	foreach($usuarios as $lnMsg){


							    ?>


							      <tr>

							      	<td><?php echo ucfirst($lnMsg['nome']); ?> </td>
							        <td><?php echo $lnMsg['email']; ?></td>
							        <td><?php echo ucfirst($lnMsg['usuario']); ?></td>
							        <td><?php if($lnMsg['admin'] == '1') echo 'Sim'; else echo 'Não'; ?></td>
							        <td>
							        <p><a href="?exclui=<?php echo $lnMsg['id'];?>">
							        	<button class="btn-xsm btn-danger">Excluir</button>
						        	</a></p>
						        	<?php if($lnMsg['admin'] == 0){?>
									<a href="?definir=<?php echo $lnMsg['id'];?>">
							       		<button class="btn-xsm btn-info">Definir ADM</button>
						       		</a>
						       		<?php } ?>
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
	</div>






	<?php
		require "footer.php";
	?>