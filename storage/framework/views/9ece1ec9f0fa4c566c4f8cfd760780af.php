<?php $__env->startSection('home'); ?>
<div class="container body">
        <div class="right_col" role="main">
			<div class="">
					<div class="page-title">
						<?php if(session('sucess')): ?>
						<div class="alert alert-sucess">
						  <?php echo e(session('sucess')); ?>

						</div>  
					  <?php endif; ?>
						<div class="title_left">
							<h3>Cadastrar curso</h3>
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo e(route('curso.create')); ?>" method="post" >
										<?php echo csrf_field(); ?>
                  <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="curso">Curso<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="curso" name="curso" required="required" class="form-control " >
											</div>
										</div>
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Departamento</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="departamento">
													<option value="Ensino Geral">Ensino Geral</option>
													<option value="Saude">Saude</option>
													<option value="Tecnico Profissional">Tecnico Profissional</option>
													<option value="Jardim de Infancia">Jardim de Infancia</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Tipo</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="tipo">
													<option value="Geral">Geral</option>
													<option value="Puniv">Puniv</option>
													<option value="Saude">Saude</option>
													<option value="Tecnico">Tecnico</option>
												</select>
											</div>
										</div>
                    
                    <div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="reset">Limpar</button>
												<button type="submit" class="btn btn-success">Cadastrar</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
      </div>
	  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.templateAdmin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/lidio/Documentos/gestao-escolar/resources/views/curso/insertCurso.blade.php ENDPATH**/ ?>