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
							<h3>Cadastrar Disciplina</h3>
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
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('disciplina.create') }}" method="post">
                    @csrf
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="nome">Disciplina<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="disciplina" required="required" class="form-control " name="disciplina">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Tipo de disciplina</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="tipo_disciplina">
													<option value="comp. socio-cultural">comp. socio-cultural</option>
													<option value="comp. cientifico">comp. cientifico</option>
													<option value="comp. tecn. tecnol. e pratico">comp. tecn. tecnol. e pratico</option>
													<option value="adicional">adicional</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Professor</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" name="professor">
													@foreach ($allProfessor as $professor)
														<option value="{{ $professor->id }}">{{ $professor->nome }}</option>
													@endforeach
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