@extends('layouts.templateAdmin')
@section('home')

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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('curso.editar', $curso->id) }}" method="post">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="curso">Curso<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="curso" name="curso" required="required" class="form-control " value="{{ $curso->curso }}" >
											</div>
										</div>
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Departamento</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="departamento">
													<option value="Ensino Geral" {{ $curso->departamento ==  "Ensino Geral" ? 'selected' : ''  }}>Ensino Geral</option>
													<option value="Saude" {{ $curso->departamento ==  "Saude" ? 'selected' : ''  }}>Saude</option>
													<option value="Tecnico Profissional" {{ $curso->departamento ==  "Tecnico Profissional" ? 'selected' : ''  }}>Tecnico Profissional</option>
													<option value="Jardim de Infancia" {{ $curso->departamento ==  "Jardim de Infancia" ? 'selected' : ''  }}>Jardim de Infancia</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Tipo</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="tipo">
													<option value="Geral" {{ $curso->tipo == 'Geral' ? 'selected' : ''  }}>Geral</option>
													<option value="Puniv" {{ $curso->tipo == 'Puniv' ? 'selected' : ''  }}>Puniv</option>
													<option value="Saude" {{ $curso->tipo == 'Saude' ? 'selected' : ''  }}>Saude</option>
													<option value="Tecnico" {{ $curso->tipo == 'Tecnico' ? 'selected' : ''  }} >Tecnico</option>
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