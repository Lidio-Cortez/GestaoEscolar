@extends('layouts.templateAdmin')

@section('home')
<div class="container">
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="page-title">
            @if (session('sucess'))
            <div class="alert alert-sucess">
              {{ session('sucess') }}
            </div>  
          @endif
            <div class="title_left">
                <h3>Turma</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content" style="overflow-x: scroll;">
                        <p>Área para visualizar, cadastrar, editar e apagar turmas.</p>

                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">ID</th>
                                    <th >Turma</th>
                                    <th >Sala</th>
                                    <th >Lotação</th>
                                    <th>Turno</th>
                                    <th style="width: 20%">Grau Acadêmico</th>
                                    <th>Curso</th>
                                    <th>Ano Acadêmico</th>
                                    <th style="width: 20%">#Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allTurmas as $turmas)
                                <tr>
                                    <td>{{ $turmas['id_turma'] }}</td>
                                    <td>{{ $turmas['turma'] }}</td>
                                    <td>{{ $turmas['sala'] }}</td>
                                    <td>{{ $turmas['lotacao'] }}</td>
                                    <td>{{ $turmas['periodo'] }}</td>
                                    <td>{{ $turmas['grau'] }}</td>
                                    <td>{{ $turmas['curso'] }}</td>
                                    <td>{{ $turmas['ano_academico'] }}</td>
                                    <td>
                                        <div class="btn-group">
                                                <button type="submit" class="btn btn-info btn-xs" style="background-color:#E9765B;border:none;" name="update" value="edit">
                                                    <i class="fa fa-pencil"></i> <a style="color:white;" href="{{ route('turma.form.edit', $turmas->id_turma) }}"> Editar </a>
                                                </button>
                                                <button type="submit" class="btn btn-danger btn-xs" name="delete" value="delete"  data-url="{{ route('turma.delete', $turmas->id_turma) }}">
                                                    <i class="fa fa-trash-o"></i> <a style="color:white;" href="{{ route('turma.delete', $turmas->id_turma) }}"> Delete </a>
                                                </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- end project list -->

                        <a href="{{ route('turma.form') }}" class="btn" style="background-color:#478BA2; color: white;">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection