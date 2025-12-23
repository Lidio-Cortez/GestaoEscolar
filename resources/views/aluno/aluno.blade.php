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
                <h3>Alunos</h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div class="x_content" style="overflow-x: scroll;">

                    <p>Área para visualizar, cadastrar, editar e apagar alunos.</p>
                    
                    <!-- start project list -->
                    <table class="table table-striped projects "   >
                      <thead>
                        <tr>
                          <th >Matricula</th>
                          <th >Nome</th>
                          <th>Nome do pai</th>
                          <th>Nome da mãe</th>
                          <th>Telefone do pai</th>
                          <th>Genero</th>
                          <th>Data de nascimento</th>
                          <th>Provincia</th>
                          <th>Municipio</th>
                          <th>Rua</th>
                          <th>Data da matricula</th>
    
                          <th style="width: 20%">#Acções</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($aluno as $alunos)
                        <tr>
                          <td>{{ $alunos->id }}</td>
                          <td>
                            <a>{{  $alunos->nome }}</a>
                            <br />
                          </td>
                          <td>
                            <a>{{ $alunos->pai }}</a>
                            <br />
                          </td>
                          <td>
                            <a>{{  $alunos->mae  }}</a>
                            <br />
                          </td>
                          <td>
                            <a>{{   $alunos->contacto }}</a>
                            <br />
                          </td>
                          <td>
                            <a>{{ $alunos->sexo }}</a>
                            <br />
                          </td>
                          <td>
                            <a>{{  $alunos->data_nascimento }}</a>
                            <br />
                          </td>
                          <td>
                            <a>{{ $alunos->provincia  }}</a>
                            <br />
                          </td>
                          <td>
                            <a>{{  $alunos->municipio }}</a>
                            <br />
                          </td>
                          <td>
                            <a>{{ $alunos->residencia }}</a>
                            <br />
                          </td>
                          
                           <td>
                            <a href="">{{ $alunos->data_inscricao }}</a>  
                          </td>

                            <td>
                              <div class="btn-group">
                                <button type="submit" class="btn btn-info btn-xs" style="background-color:#E9765B;border:none;" name="update" value="edit">
                                    <i class="fa fa-pencil"></i> <a style="color:white;" href="{{ route('aluno.form.edit', $alunos->id) }}"> Editar </a>
                                </button>
                                <button type="submit" class="btn btn-danger btn-xs" name="delete" value="delete"  data-url="{{ route('aluno.delete', $alunos->id) }}">
                                    <i class="fa fa-trash-o"></i> <a style="color:white;" href="{{ route('aluno.delete', $alunos->id) }}"> Delete </a>
                                </button>
                        </div>
                            </td>

                        </tr>
                        @endforeach;
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection