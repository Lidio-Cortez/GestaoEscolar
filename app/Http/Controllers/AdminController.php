<?php
namespace App\Http\Controllers;

    use App\Models\User;
    use App\Models\Aluno;
    use App\Models\Professor;
    use App\Models\Funcionario;
    use App\Models\Curso;
    USE App\Models\Turma;
    use Illuminate\Http\Request;

    class AdminController extends Controller
    {
        public function index()
        {
            $totalAlunos = Aluno::count(); 
            $totalProfessores = Professor::count(); // vamos trocar depois pelo modelo real
            $totalCursos = Curso::count(); // idem
            $totalFuncionarios = Funcionario::count(); 
            $totalTurmas = Turma::count();

            return view('admin.dashboard', compact('totalAlunos', 'totalProfessores', 'totalCursos', 'totalFuncionarios', 'totalTurmas'));
        }
    }
