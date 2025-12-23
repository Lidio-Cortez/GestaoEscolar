@extends('layouts.templateAdmin')

@section('home')
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="page-title">
              @if (session('sucess'))
              <div class="alert alert-sucess">
                {{ session('sucess') }}
              </div>  
            @endif
              <div class="title_left">
                <h3>Professores</h3>
              </div>
              <div class="title_right">
							  <div class="col-md-5 col-sm-5  form-group pull-right ">
                  <div class="input-group">
											<input type="text" class="form-control" placeholder="digite o nome...">
											<span class="input-group-btn">
													<button type="button" class="btn" style="background-color:#478BA2;color:white;"></button>
											</span>
									</div>
							  </div>
						  </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <p>Área para visualizar, cadastrar, editar e apagar o professor. </p>
                    
                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">ID</th>
                          <th>Nome completo</th>
                          <th>Genero</th>
                          <th>Estado Cívil</th>
                          <th>Residência</th>
                          <th>Contacto</th>
                          <th>Nível Academico</th>
                          <th>Área de Formação</th>
                          <th style="width: 20%">#Acções</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($professores as $professor)
                        <tr>
                          <td>
                            <a>{{ $professor->id }}</a>
                            <br />
                          </td>
                          <td>
                            <a>{{ $professor->nome }}</a>
                            <br />
                          </td>
                          <td>
                            <a>{{ $professor->sexo }}</a>
                            <br />
                          </td>
                          <td>
                            <a>{{ $professor->estado_civil }}</a>
                          </td>
                          <td>
                            <a>{{ $professor->residencia }}</a>
                          </td>
                          <td>
                           <a>{{ $professor->contacto }}</a>
                          </td>
                          <td>
                            <a>{{ $professor->nivel_academico }}</a>
                          </td>
                          <td>
                            <a>{{ $professor->area_formacao }}</a>
                          </td>
                            <td>
                            <div class="btn-group">
                              <button type="submit" class="btn btn-info btn-xs" style="background-color:#E9765B;border:none;" name="update" value="edit">
                                <i class="fa fa-pencil"></i> <a style="color:white;" href="{{ route('professor.form.edit', $professor->id) }}"> Editar </a>
                            </button>
                            <button type="submit" class="btn btn-danger btn-xs" name="delete" value="delete"  data-url="{{ route('professor.delete', $professor->id) }}">
                                <i class="fa fa-trash-o"></i> <a style="color:white;" href="{{ route('professor.delete', $professor->id) }}"> Delete </a>
                            </button>
                              </div>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <!-- end project list -->
                        <button class="btn" style="background-color:#478BA2;" id="btnCadastro" type="button" data-bs-toggle="modal" data-bs-target="#meuModal"><a style="color: white;" href="{{ route('professor.form') }}" class="modal_ajax">Cadastrar</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="meuModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="tituloModal">Professor</h1>
                    </div>
                    <div class="modal-body">
                        Carregando...
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        @endsection
