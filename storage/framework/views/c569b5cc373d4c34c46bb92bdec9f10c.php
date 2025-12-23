
<?php $__env->startSection('home'); ?>
		<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Editar Aluno</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo e(route('aluno.editar', $aluno->id)); ?>" method="post" enctype="multipart/form-data">
										<?php echo csrf_field(); ?>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="bi">Número do BI<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="bi" name="bi" required="required" class="form-control " value="<?php echo e($aluno->bi); ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nome">Nome<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="nome" name="nome" required="required" class="form-control " value="<?php echo e($aluno->nome); ?>">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="pai">Nome do pai<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="pai" name="pai" required="required" class="form-control " value="<?php echo e($aluno->pai); ?>">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="mae">Nome da mãe<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="mae" name="mae" required="required" class="form-control " value="<?php echo e($aluno->mae); ?>">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="contacto">Contacto<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="contacto" name="contacto" required="required" class="form-control " value="<?php echo e($aluno->contacto); ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Genero</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="sexo">
													<option value="masculino" <?php echo e($aluno->sexo == 'Masculino' ? 'selected' : ''); ?>>Masculino</option>
													<option value="femenino" <?php echo e($aluno->sexo == 'Feminino' ? 'selected' : ''); ?>>Feminino</option>
												</select>
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Data de nascimento<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="data_nascimento" name="data_nascimento"  value="<?php echo e($aluno->data_nascimento); ?>" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="provincia">Província<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="provincia" name="provincia" required="required" class="form-control " value="<?php echo e($aluno->provincia); ?>">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="municipio">Municipio<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="municipio" name="municipio" required="required" class="form-control " value="<?php echo e($aluno->municipio); ?>">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="residencia">Residencia<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="residencia" name="residencia" required="required" class="form-control" value="<?php echo e($aluno->residencia); ?>">
											</div>
										</div>
                    
                    <div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success">Editar</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /page content -->
			<?php $__env->stopSection(); ?>

			

<?php echo $__env->make('layouts.templateAdmin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/lidio/Documentos/gestao-escolar/resources/views/aluno/editarAluno.blade.php ENDPATH**/ ?>