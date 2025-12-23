@extends('layouts.templateAdmin')
@section('home')

        <div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Editar Disciplina</h3>
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('disciplina.editar', $disciplina->id) }}" method="post">
										@csrf
										<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align" for="disciplina">Disciplina<span class="required">*</span>
																</label>
																<div class="col-md-6 col-sm-6 ">
																	<input type="text" id="disciplina" required="required" class="form-control " name="disciplina" value="{{ $disciplina->disciplina }}">
																</div>
															</div>
															<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align">Tipo de disciplina</label>
																<div class="col-md-6 col-sm-6">
																	<select class="form-control" name="tipo_disciplina">
																		<option value="comp. socio-cultural" {{ $disciplina->tipo_disciplina == 'comp. socio-cultural' ? 'selected' : '' }}>comp. socio-cultural</option>
																		<option value="comp. cientifico" {{ $disciplina->tipo_disciplina == 'comp. cientifico' ? 'selected' : '' }}>comp. cientifico</option>
																		<option value="comp. tecn. tecnol. e pratico" {{ $disciplina->tipo_disciplina == 'comp. tecn. tecnol. e pratico' ? 'selected' : '' }}>comp. tecn. tecnol. e pratico</option>
																		<option value="adicional" {{ $disciplina->tipo_disciplina == 'adicional' ? 'selected' : '' }}>adicional</option>
																	</select>
																</div>
															</div>
															
															<div class="item form-group">
																<label class="col-form-label col-md-3 col-sm-3 label-align">Professor</label>
																<div class="col-md-6 col-sm-6">
																	<select class="form-control" name="professor">
																		@foreach ($allProfessor as $professor)
																			@if ($professor->id == $disciplina->fk_professor)
																			<option value="{{ $professor->id }}">{{ $professor->nome }}</option>
																			@endif
																		@endforeach
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