<br>
<div class="text-center">

<?php if (!empty($totalEsqNoroeste)) { ?>
	<div class="badge badge-success">
		<h4> El resultado obtenido del problema anterior basandonos <br>con el metodo Esquina Noroeste nos da como resultado.</h4>
		<h1>
		    <span class="label label-default"> <?php echo "$ ".$totalEsqNoroeste; ?></span>
		</h1>
		<h4> 
			Miles. <br>
			<?php echo "$ ".number_format(($totalEsqNoroeste * 1000), 2); ?>
		</h4>
	</div>
<?php } ?>
</div>
<br>

<div class="card">
	<h5 class="card-header bg-info white-text text-center py-2">
		<strong style="color:#FFFFFF">Multiplicadores</strong>
	</h5>
	<div class="card-body px-lg-5">
		<form class="text-left" id="formMetodo" name="formMetodo" method="POST" action="<?php echo $action ?>">
			
			<div class="row text-center">
				<div class="col-sm-3"></div>
				<div class="col-sm-1">
					<label for="Guatemala"><strong>Guatemala</strong></label>
				</div>
				<div class="col-sm-1">
					<label for="Reu"><strong>Reu</strong></label>
				</div>
				<div class="col-sm-1">
					<label for="Peten"><strong>Petén</strong></label>
				</div>
				<div class="col-sm-1">
					<label for="Izabal"><strong>Izabal</strong></label>
				</div>
				<div class="col-sm-1">
					<label for="Huehue"><strong>Huehue</strong></label>
				</div>
				<div class="col-sm-1">
					<label for="Jutiapa"><strong>Jutiapa</strong></label>
				</div>
				<div class="col-sm-1">
					<label for="demanda"><strong>Oferta</strong></label>
				</div>
				<div class="col-sm-2"></div>
			</div>
			
			<div class="form-group">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-1 text-center">
						<label for="s10"><strong>Planta 1</strong></label>
					</div>
					<div class="col-sm-1">
						<input type="number" id="s11" name="fila0[1]" class="form-control" value="<?php echo $valorAsigna['asignar1']?>" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s12" name="fila0[2]" class="form-control" value="<?php echo $valorAsigna['asignar2']?>" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s13" name="fila0[3]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s14" name="fila0[4]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s15" name="fila0[5]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s16" name="fila0[6]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s17" name="fila0[7]" class="form-control" value="<?php echo $oferta['oferta1']?>">
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
			
			<div class="form-group">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-1 text-center">
						<label for="S20"><strong>Planta 2</strong></label>
					</div>
					<div class="col-sm-1">
						<input type="number" id="s21" name="fila1[1]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s22" name="fila1[2]" class="form-control" value="<?php echo $valorAsigna['asignar3']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s23" name="fila1[3]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s24" name="fila1[4]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s25" name="fila1[5]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s26" name="fila1[6]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s27" name="fila1[7]" class="form-control" value="<?php echo $oferta['oferta2']?>">
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-1 text-center">
						<label for="S30"><strong>Planta 3</strong></label>
					</div>
					<div class="col-sm-1">
						<input type="number" id="s31" name="fila2[1]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s32" name="fila2[2]" class="form-control" value="<?php echo $valorAsigna['asignar5']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s33" name="fila2[3]" class="form-control" value="<?php echo $valorAsigna['asignar6']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s34" name="fila2[4]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s35" name="fila2[5]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s36" name="fila2[6]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s37" name="fila2[7]" class="form-control"value="<?php echo $oferta['oferta3']?>">
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-sm-2"></div>		
					<div class="col-sm-1 text-center">
						<label for="S40"><strong>Planta 4</strong></label>
					</div>
					<div class="col-sm-1">
						<input type="number" id="s41" name="fila3[1]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s42" name="fila3[2]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s43" name="fila3[3]" class="form-control" value="<?php echo $valorAsigna['asignar7']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s44" name="fila3[4]" class="form-control" value="<?php echo $valorAsigna['asignar8']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s45" name="fila3[5]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s46" name="fila3[6]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s47" name="fila3[7]" class="form-control" value="<?php echo $oferta['oferta4']?>">
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-1 text-center">
						<label for="S50"><strong>Planta 5</strong></label>
					</div>
					<div class="col-sm-1">
						<input type="number" id="s51" name="fila4[1]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s52" name="fila4[2]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s53" name="fila4[3]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s54" name="fila4[4]" class="form-control" value="<?php echo $valorAsigna['asignar9']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s55" name="fila4[5]" class="form-control" value="<?php echo $valorAsigna['asignar10']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s56" name="fila4[6]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s57" name="fila4[7]" class="form-control" value="<?php echo $oferta['oferta5']?>">
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-1 text-center">
						<label for="S60"><strong>Planta 6</strong></label>
					</div>
					<div class="col-sm-1">
						<input type="number" id="s61" name="fila5[1]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s62" name="fila5[2]" class="form-control" >	
					</div>
					<div class="col-sm-1">
						<input type="number" id="s63" name="fila5[3]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s64" name="fila5[4]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s65" name="fila5[5]" class="form-control"  value="<?php echo $valorAsigna['asignar11']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s66" name="fila5[6]" class="form-control"value="<?php echo $valorAsigna['asignar12']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s67" name="fila5[7]" class="form-control" value="<?php echo $oferta['oferta6']?>">
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-1 text-center">
						<label for="S70"><strong>Planta 7</strong></label>
					</div>
					<div class="col-sm-1">
						<input type="number" id="s71" name="fila6[1]" class="form-control" value="<?php echo $valorAsigna['teta']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s72" name="fila6[2]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s73" name="fila6[3]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s74" name="fila6[4]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s75" name="fila6[5]" class="form-control" >
					</div>
					<div class="col-sm-1">
						<input type="number" id="s76" name="fila6[6]" class="form-control" value="<?php echo $valorAsigna['asignar13']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s77" name="fila6[7]" class="form-control" value="<?php echo $oferta['oferta7']?>">
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-1">
						<label for="demanda"><strong>Demanda</strong></label>
					</div>
					<div class="col-sm-1">
						<input type="number" id="s81" name="fila7[1]" class="form-control" value="<?php echo $demanda['demanda1']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s82" name="fila7[2]" class="form-control" value="<?php echo $demanda['demanda2']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s83" name="fila7[3]" class="form-control" value="<?php echo $demanda['demanda3']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s84" name="fila7[4]" class="form-control" value="<?php echo $demanda['demanda4']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s85" name="fila7[5]" class="form-control" value="<?php echo $demanda['demanda5']?>">
					</div>
					<div class="col-sm-1">
						<input type="number" id="s86" name="fila7[6]" class="form-control" value="<?php echo $demanda['demanda6']?>">
					</div>
					
				</div>
			</div>
		</form>
	</div>
</div>

<br>
<div class="text-center">

<?php if (!empty($totalMultiplicadores)) { ?>
	<div class="badge badge-success">
		<h4> El resultado obtenido del problema anterior basandonos con el metodo Esquina <br>Noroeste aplicando el metodo de multiplicadores nos da como resultado.</h4>
		<h1>
		    <span class="label label-default"> <?php echo "$ ".$totalMultiplicadores; ?></span>
		</h1>
		<h4> 
			Miles. <br>
			<?php echo "$ ".number_format(($totalMultiplicadores * 1000), 2); ?> <br><br>
			Obteniendo un ahorro neto de:  <br>
			<?php echo "$ ".number_format((($totalEsqNoroeste - $totalMultiplicadores) * 1000), 2); ?>
		</h4>
	</div>
<?php } ?>
</div>
<br>