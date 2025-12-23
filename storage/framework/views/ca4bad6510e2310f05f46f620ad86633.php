

<?php $__env->startSection('home'); ?>
<div class="container body" >
        <div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<?php if(session('sucess')): ?>
              <div class="alert alert-sucess">
                <?php echo e(session('sucess')); ?>

              </div>  
            <?php endif; ?>
						<div class="title_left">
							<h3>Editar Professor</h3>
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo e(route('professor.editar', $professor->id)); ?>" method="post" >
										<?php echo csrf_field(); ?>	
                  <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nome">Nome completo<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="nome" required="required" class="form-control " name="nome" value="<?php echo e($professor->nome); ?>"> 
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Genero</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="sexo">
													<option value="M" <?php echo e($professor->sexo == "M" ? 'selected' : ''); ?>>Masculino</option>
													<option value="F" <?php echo e($professor->sexo == "F" ? 'selected' : ''); ?>>Femenino</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Estado cívil</label>
											<div class="col-md-6 col-sm-6">

												<select class="form-control" name="estado_civil">
													<option value="C" <?php echo e($professor->estado_civil == "C" ? 'selected' : ''); ?>>Casado(a)</option>
                          <option value="S">Solteiro(a)</option>
													<option value="V" <?php echo e($professor->estado_civil == "V" ? 'selected' : ''); ?>>Viuvo(a)</option>
													<option value="S" <?php echo e($professor->estado_civil == "S" ? 'selected' : ''); ?>>Solteiro(a)</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label for="residencia" class="col-form-label col-md-3 col-sm-3 label-align">Residencia<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="residencia" class="form-control" type="text" name="residencia" value="<?php echo e($professor->residencia); ?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="contacto" class="col-form-label col-md-3 col-sm-3 label-align">Telefone<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="contacto" class="form-control" type="text" name="contacto" value="<?php echo e($professor->contacto); ?>">
											</div>
										</div>
                    					<div class="item form-group">
											<label for="nivel_academico" class="col-form-label col-md-3 col-sm-3 label-align">Nivel academico<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="nivel_academico" class="form-control" type="text" name="nivel_academico" value="<?php echo e($professor->nivel_academico); ?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="area_formacao" class="col-form-label col-md-3 col-sm-3 label-align">Area de formação<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="area_formacao" class="form-control" type="text" name="area_formacao" value="<?php echo e($professor->area_formacao); ?>">
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
					<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.templateAdmin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/lidio/Documentos/gestao-escolar/resources/views/professor/editProfessor.blade.php ENDPATH**/ ?>