@extends('layouts.templateAdmin')
@section('home')

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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('funcionario.editar', $funcionario->id) }}" method="post">
										@csrf
										<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align" for="nome">Nome completo<span class="required">*</span>
																</label>
																<div class="col-md-6 col-sm-6 ">
																	<input type="text" id="nome" required="required" class="form-control " name="nome" value="{{ $funcionario->nome }}">
																</div>
															</div>
															<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align">Genero</label>
																<div class="col-md-6 col-sm-6">
																	<select class="form-control" name="sexo">
																		<option value="M" {{ $funcionario->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
																		<option value="F" {{ $funcionario->sexo == 'F' ? 'selected' : '' }}>Femenino</option>
																	</select>
																</div>
															</div>
															<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align">Estado cívil</label>
																<div class="col-md-6 col-sm-6">
					
																	<select class="form-control" name="estado_civil">
																		<option value="C" {{ $funcionario->estado_civil == 'C' ? 'selected' : '' }}>Casado(a)</option>
											  <option value="S" {{ $funcionario->estado_civil == 'S' ? 'selected' : '' }}>Solteiro(a)</option>
																		<option value="V" {{ $funcionario->estado_civil == 'V' ? 'selected' : '' }}>Viuvo(a)</option>
																		
																	</select>
																</div>
															</div>
										<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align" for="residencia">Residencia<span class="required">*</span>
																</label>
																<div class="col-md-6 col-sm-6 ">
																	<input type="text" id="residencia" required="required" class="form-control " name="residencia" value="{{ $funcionario->residencia }}">
																</div>
															</div>
										<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align" for="telefone">Contacto<span class="required">*</span>
																</label>
																<div class="col-md-6 col-sm-6 ">
																	<input type="text" id="telefone" required="required" class="form-control " name="telefone" value="{{ $funcionario->telefone }}">
																</div>
															</div>
															<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align" for="cargo">Cargo<span class="required">*</span>
																</label>
																<div class="col-md-6 col-sm-6 ">
																	<input type="text" id="cargo" required="required" class="form-control " name="cargo" value="{{ $funcionario->cargo }}">
																</div>
															</div>
															<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align">Estado</label>
																<div class="col-md-6 col-sm-6">
																	<select class="form-control" name="estado">
											  <option value="activo" {{ $funcionario->estado == 'activo' ?'selected' : ''  }} >Activo</option>
																		<option value="desactivado" {{ $funcionario->estado == 'desactivado' ?'selected' : ''  }}>Desactivado</option>
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

      @endsection