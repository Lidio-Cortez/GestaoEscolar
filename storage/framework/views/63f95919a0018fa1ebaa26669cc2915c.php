

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
							<h3>Cadastrar Turma</h3>
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo e(route('turma.create')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="turma">Turma<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="turma" required="required" class="form-control " name="turma">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="sala">Sala<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="sala" required="required" class="form-control " name="sala">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="lotacao">Lotacao<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="lotacao" required="required" class="form-control " name="lotacao">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Turno</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="turno">
													<option value="manha">manhã</option>
													<option value="tarde">tarde</option>
												</select>
											</div>
										</div>
                  <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Grau Academico</label>
											<div class="col-md-6 col-sm-6">

												<select class="form-control" name="grau">
													<option value="iniciacao">Iniciação</option>
                          <option value="1º classe">1º classe</option>
													<option value="2º classe">2º classe</option>
													<option value="3º classe">3º classe</option>
													<option value="4º classe">4º classe</option>
													<option value="5º classe">5º classe</option>
													<option value="6º classe">6º classe</option>
													<option value="7º classe">7º classe</option>
													<option value="8º classe">8º classe</option>
													<option value="9º classe">9º classe</option>
													<option value="10º classe">10º classe</option>
													<option value="11º classe">11º classe</option>
													<option value="12º classe">12º classe</option>
                          <option value="13º classe">13º classe</option>
												</select>
											</div>
										</div>
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Curso</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="curso">
                          <option value="Sem opçao" default>Sem opçao</option>
													<option value="informatica">Informática</option>
													<option value="electronica">Electronica</option>
                          <option value="direito">Direito</option>
                          <option value="ciencia física e biológica">Ciencia física e biológica</option>
												</select>
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="anoAcademico">Ano academico<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="anoAcademico" required="required" class="form-control " name="ano_academico">
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
			<!-- /page content -->

      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.templateAdmin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/lidio/Documentos/gestao-escolar/resources/views/turma/insertTurma.blade.php ENDPATH**/ ?>