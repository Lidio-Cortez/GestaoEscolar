@extends('layouts.templateAdmin')

@section('home')
<div class="container body" >

        <div class="right_col" role="main">
				<div class="">
					<div class="page-title">
            @if (session('sucess'))
              <div class="alert alert-sucess">
                {{ session('sucess') }}
              </div>  
            @endif
						<div class="title_left">
							<h3>Cadastrar Funcionario</h3>
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('funcionario.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nome">Nome completo<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="turma" required="required" class="form-control " name="nome">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Genero</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="sexo">
													<option value="M">Masculino</option>
													<option value="F">Femenino</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Estado cívil</label>
											<div class="col-md-6 col-sm-6">

												<select class="form-control" name="estado_civil">
													<option value="C">Casado(a)</option>
                          <option value="S">Solteiro(a)</option>
													<option value="V">Viuvo(a)</option>
													
												</select>
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="residencia">Residencia<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="residencia" required="required" class="form-control " name="residencia">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="telefone">Contacto<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="telefone" required="required" class="form-control " name="telefone">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="cargo">Cargo<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="cargo" required="required" class="form-control " name="cargo">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Estado</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="estado">
                          <option value="activo" default>Activo</option>
													<option value="desactivado">Desactivado</option>
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
			<!-- /page content -->

      @endsection