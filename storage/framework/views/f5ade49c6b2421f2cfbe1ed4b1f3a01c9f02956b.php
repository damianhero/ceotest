<footer id="footer" style="background-color:#D6D6D0;"><!--Footer-->
		<div class="footer-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 ml-auto mr-auto p-5">
					<?php if(Session::has('flash_message_error')): ?>
                        <div class="alert alert-error alert-block text-center" style="background-color:#c05659 !important; color:white !important;">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                    	        <strong><?php echo session('flash_message_error'); ?></strong>
                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('flash_message_success')): ?>
                    	<div class="alert alert-error alert-block text-center" style="background-color:#36bea6 !important; color:white !important;">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong><?php echo session('flash_message_success'); ?></strong>
                        </div>
                    <?php endif; ?>
					<h3 class="title text-center">Contáctanos</h3>
					<form id="loginform" method="post" action="<?php echo e(url('/contacto_form')); ?>"><?php echo e(csrf_field()); ?>

						<div class="form-row" style="font-size:18px;">
							<div class="form-group col-md-6 p-3">
								<label for="nombre">Nombre</label>
								<input style="font-size:18px;" name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">
								<?php if($errors->has('nombre')): ?>
								<small class="form-text invalid-feedback"><?php echo e($errors->first('nombre')); ?></small>
								<?php endif; ?>
							</div>
							<div class="form-group col-md-6 p-3">
								<label for="empresa">Empresa</label>
								<input style="font-size:18px;" name="empresa" type="text" class="form-control" id="empresa" placeholder="Empresa">
								<?php if($errors->has('empresa')): ?>
								<small class="form-text invalid-feedback"><?php echo e($errors->first('empresa')); ?></small>
								<?php endif; ?>
							</div>
							<div class="form-group col-md-6 p-3">
								<label for="email">Email</label>
								<input style="font-size:18px;" name="email" type="email" class="form-control" id="email" placeholder="Email">
								<?php if($errors->has('email')): ?>
								<small class="form-text invalid-feedback"><?php echo e($errors->first('email')); ?></small>
								<?php endif; ?>
							</div>
							<div class="form-group col-md-6 p-3">
								<label for="tipo_servicio">Tipo de servicio</label>
								<select style="font-size:18px; height:auto;" name="tipo_servicio" id="tipo_servicio" class="form-control">
									<option value="---">----</option>
									<option value="Viajes locales">Viajes locales</option>
									<option value="Viajes foráneos">Viajes foráneos</option>
									<option value="Material peligroso">Material peligroso</option>
									<option value="Exceso de dimensiones">Exceso de dimensiones</option>
									<option value="C-TPAT">C-TPAT</option>
									<option value="Viaje hacia frontera">Viaje hacia frontera</option>
									<option value="Viajes redondos">Viajes redondos</option>
								</select>
								<?php if($errors->has('tipo_servicio')): ?>
								<small class="form-text invalid-feedback"><?php echo e($errors->first('tipo_servicio')); ?></small>
								<?php endif; ?>
							</div>
							<div class="form-group col-md-6 p-3">
								<label for="telefono">Teléfono</label>
								<input style="font-size:18px;" name="telefono" type="tel" class="form-control" id="telefono" placeholder="Teléfono">
								<?php if($errors->has('telefono')): ?>
								<small class="form-text invalid-feedback"><?php echo e($errors->first('telefono')); ?></small>
								<?php endif; ?>
							</div>
							<div class="form-group col-md-6 p-3">
								<button style="font-size:18px; float:right;" type="submit" class="btn btn-success">Enviar</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container-fluid">
				<div class="row">
				<div class="col-md-12 p-3">
					<h6 class="text-center">GUIA DE TRANSPORTES © 2019 | Aviso de Privacidad</h6>
				</div>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->