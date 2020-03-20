<?php if(isset($usuarios)): ?> 
	<form method="Get">
	  <div class="form-group">
	    <label for="usuarioSelect">Usuarios: </label>
	    <select class="form-control" id="usuario">
	    	<option>Seleccione...</option>
	    	<?php if(isset($usuarios)): ?>
	    		<?php foreach($usuarios as $rows): ?>
	    			<option value="<?php $rows->usuario; ?>"><?php echo $rows->usu_nombre; ?></option>
	    		<?php endforeach ?>
	    	<?php endif ?>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlTextarea1">Comentario: </label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	  </div>
	</form>
<?php endif?>


<form id="formGuardar" method="POST" action="<?php echo $action; ?>" class="text-center border border-light p-5">
	<p class="h4 mb-4">Ingresar Usuario</p>
	<input type="text" id="usuario" name="usuario" class="form-control mb-4" placeholder="Usuario">
	<input type="email" id="correo" name="correo" class="form-control mb-4" placeholder="Correo">

	<div class="d-flex justify-content-around">
		<div>
			<div  class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" id="defaultLogin" name="defaultLogin">
				<label class="custom-control-label" for="defaultLogin">Recuérdeme</label>
			</div>
		</div>
		<div>
			<a href="">Se te olvidó tu contraseña?</a>
		</div>
	</div>

	<button class="btn btn-info btn-block my-4" type="submit">Guardar</button>
	<p>No es un miembro?
		<a href="">Registro</a>
	</p>

	<p>O inicie sesión con:</p>
	<a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i>Facebook</a>
	<a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i> Twitter</a>
</form>


<div id="listaUsuario">
</div>