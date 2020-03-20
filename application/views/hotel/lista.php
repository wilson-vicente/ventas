<div class="panel panel-default">
	<div class="table-responsive">
	  <table class="table table-hover table-condensed">
		<caption>Lista de Usuarios</caption>
		<thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Id Usuario</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Correo</th>
		    </tr>
		</thead>
	    <?php if(isset($listaUsuario)): ?>
	    	<?php foreach ($listaUsuario as $key => $row): ?>
	    		<tbody>
				    <tr>
				      <th scope="row"><?php echo $key; ?></th>
				      <td><?php echo $row->usuario; ?></td>
				      <td><?php echo $row->usu_nombre; ?></td>
				      <td><?php echo $row->usu_correo; ?></td>
				    </tr>
				</tbody>
	    	<?php endforeach ?>
	    <?php endif ?>
	  </table>
	</div>
</div>