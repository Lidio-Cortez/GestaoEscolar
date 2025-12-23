
<?php $__env->startSection('home'); ?>

        <div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Editar Curso</h3>
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo e(route('curso.editar', $curso->id)); ?>" method="post">
										<?php echo csrf_field(); ?>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="curso">Curso<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="curso" name="curso" required="required" class="form-control " value="<?php echo e($curso->curso); ?>" >
											</div>
										</div>
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Departamento</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="departamento">
													<option value="Ensino Geral" <?php echo e($curso->departamento ==  "Ensino Geral" ? 'selected' : ''); ?>>Ensino Geral</option>
													<option value="Saude" <?php echo e($curso->departamento ==  "Saude" ? 'selected' : ''); ?>>Saude</option>
													<option value="Tecnico Profissional" <?php echo e($curso->departamento ==  "Tecnico Profissional" ? 'selected' : ''); ?>>Tecnico Profissional</option>
													<option value="Jardim de Infancia" <?php echo e($curso->departamento ==  "Jardim de Infancia" ? 'selected' : ''); ?>>Jardim de Infancia</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Tipo</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="tipo">
													<option value="Geral" <?php echo e($curso->tipo == 'Geral' ? 'selected' : ''); ?>>Geral</option>
													<option value="Puniv" <?php echo e($curso->tipo == 'Puniv' ? 'selected' : ''); ?>>Puniv</option>
													<option value="Saude" <?php echo e($curso->tipo == 'Saude' ? 'selected' : ''); ?>>Saude</option>
													<option value="Tecnico" <?php echo e($curso->tipo == 'Tecnico' ? 'selected' : ''); ?> >Tecnico</option>
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
<?php echo $__env->make('layouts.templateAdmin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/lidio/Documentos/gestao-escolar/resources/views/curso/editCurso.blade.php ENDPATH**/ ?>