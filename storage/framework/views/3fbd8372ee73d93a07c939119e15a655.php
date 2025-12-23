
<?php $__env->startSection('home'); ?>

        <div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Editar Turma</h3>
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo e(route('funcionario.editar', $funcionario->id)); ?>" method="post">
										<?php echo csrf_field(); ?>
										<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align" for="nome">Nome completo<span class="required">*</span>
																</label>
																<div class="col-md-6 col-sm-6 ">
																	<input type="text" id="nome" required="required" class="form-control " name="nome" value="<?php echo e($funcionario->nome); ?>">
																</div>
															</div>
															<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align">Genero</label>
																<div class="col-md-6 col-sm-6">
																	<select class="form-control" name="sexo">
																		<option value="M" <?php echo e($funcionario->sexo == 'M' ? 'selected' : ''); ?>>Masculino</option>
																		<option value="F" <?php echo e($funcionario->sexo == 'F' ? 'selected' : ''); ?>>Femenino</option>
																	</select>
																</div>
															</div>
															<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align">Estado cívil</label>
																<div class="col-md-6 col-sm-6">
					
																	<select class="form-control" name="estado_civil">
																		<option value="C" <?php echo e($funcionario->estado_civil == 'C' ? 'selected' : ''); ?>>Casado(a)</option>
											  <option value="S" <?php echo e($funcionario->estado_civil == 'S' ? 'selected' : ''); ?>>Solteiro(a)</option>
																		<option value="V" <?php echo e($funcionario->estado_civil == 'V' ? 'selected' : ''); ?>>Viuvo(a)</option>
																		
																	</select>
																</div>
															</div>
										<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align" for="residencia">Residencia<span class="required">*</span>
																</label>
																<div class="col-md-6 col-sm-6 ">
																	<input type="text" id="residencia" required="required" class="form-control " name="residencia" value="<?php echo e($funcionario->residencia); ?>">
																</div>
															</div>
										<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align" for="telefone">Contacto<span class="required">*</span>
																</label>
																<div class="col-md-6 col-sm-6 ">
																	<input type="text" id="telefone" required="required" class="form-control " name="telefone" value="<?php echo e($funcionario->telefone); ?>">
																</div>
															</div>
															<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align" for="cargo">Cargo<span class="required">*</span>
																</label>
																<div class="col-md-6 col-sm-6 ">
																	<input type="text" id="cargo" required="required" class="form-control " name="cargo" value="<?php echo e($funcionario->cargo); ?>">
																</div>
															</div>
															<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align">Estado</label>
																<div class="col-md-6 col-sm-6">
																	<select class="form-control" name="estado">
											  <option value="activo" <?php echo e($funcionario->estado == 'activo' ?'selected' : ''); ?> >Activo</option>
																		<option value="desactivado" <?php echo e($funcionario->estado == 'desactivado' ?'selected' : ''); ?>>Desactivado</option>
																	</select>
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
<?php echo $__env->make('layouts.templateAdmin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/lidio/Documentos/gestao-escolar/resources/views/funcionario/editFuncionario.blade.php ENDPATH**/ ?>