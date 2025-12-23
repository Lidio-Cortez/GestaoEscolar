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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('turma.editar', $turma->id_turma) }}" method="post">
                    @csrf
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="turma">Turma<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="turma" required="required" class="form-control " name="turma" value="{{ $turma->turma }}">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="sala">Sala<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="sala" required="required" class="form-control " name="sala" value="{{ $turma->sala }}">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="lotacao">Lotacao<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="lotacao" required="required" class="form-control " name="lotacao" value="{{ $turma->lotacao }}">
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Turno</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="periodo">
													<option value="manha" {{ $turma->periodo == 'manha' ? 'selected' : '' }}>manhã</option>
													<option value="tarde" {{ $turma->periodo == 'tarde' ? 'selected' : '' }}>tarde</option>
												</select>
											</div>
										</div>
                  <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Grau Academico</label>
											<div class="col-md-6 col-sm-6">

												<select class="form-control" name="grau">
													<option value="iniciacao" {{ $turma->grau == 'iniciacao' ? 'selected' : '' }}>Iniciação</option>
                          <option value="1º classe" {{ $turma->grau == '1º classe' ? 'selected' : '' }}>1º classe</option>
													<option value="2º classe" {{ $turma->grau == '2º classe' ? 'selected' : '' }}>2º classe</option>
													<option value="3º classe" {{ $turma->grau == '3º classe' ? 'selected' : '' }}>3º classe</option>
													<option value="4º classe" {{ $turma->grau == '4º classe' ? 'selected' : '' }}>4º classe</option>
													<option value="5º classe" {{ $turma->grau == '5º classe' ? 'selected' : '' }}>5º classe</option>
													<option value="6º classe" {{ $turma->grau == '6º classe' ? 'selected' : '' }}>6º classe</option>
													<option value="7º classe" {{ $turma->grau == '7º classe' ? 'selected' : '' }}>7º classe</option>
													<option value="8º classe" {{ $turma->grau == '8º classe' ? 'selected' : '' }}>8º classe</option>
													<option value="9º classe" {{ $turma->grau == '9º classe' ? 'selected' : '' }}>9º classe</option>
													<option value="10º classe" {{ $turma->grau == '10º classe' ? 'selected' : '' }}>10º classe</option>
													<option value="11º classe" {{ $turma->grau == '11º classe' ? 'selected' : '' }}>11º classe</option>
													<option value="12º classe" {{ $turma->grau == '12º classe' ? 'selected' : '' }}>12º classe</option>
                          <option value="13º classe" {{ $turma->grau == '13º classe' ? 'selected' : '' }}>13º classe</option>
												</select>
											</div>
										</div>
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Curso</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="curso">
                          <option value="Sem opçao" {{ $turma->curso == 'Sem opçao' ? 'selected' : '' }}>Sem opçao</option>
													<option value="informatica" {{ $turma->curso == 'informatica' ? 'selected' : '' }}>Informática</option>
													<option value="electronica" {{ $turma->curso == 'electronica' ? 'selected' : '' }}>Electronica</option>
                          <option value="direito" {{ $turma->curso == 'direito' ? 'selected' : '' }}>Direito</option>
                          <option value="ciencia física e biológica" {{ $turma->curso == 'ciencia física e biológica' ? 'selected' : '' }}>Ciencia física e biológica</option>
												</select>
											</div>
										</div>
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="anoAcademico">Ano academico<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="anoAcademico" required="required" class="form-control " name="ano_academico" value="{{  $turma->ano_academico }}">
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