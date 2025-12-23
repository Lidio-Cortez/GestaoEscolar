<?php
//Controllers
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->check()) {
            return auth()->user()->role === 'admin'
                ? redirect()->route('admin.dashboard')
                : redirect()->route('dashboard');
        }
        return redirect()->route('login');
    })->name('dashboard');
    Route::get('/logout', function () {
        if (auth()->check()) {
             auth()->logout();
            return redirect()->route('login');
        }
        return redirect()->route('login');
    })->name('logout');

    // ✅ Corrigido: rota do painel admin agora chama o controller
    Route::get('/admin/dashboard', [AdminController::class, 'index'])
        ->name('admin.dashboard');

        //Alunos 
        Route::get('/aluno/form', [AlunoController::class, 'form'])
        ->name('aluno.form');
        Route::post('/aluno/create', [AlunoController::class, 'create'])
        ->name('aluno.create');
        Route::post('/aluno/confirmacao', [AlunoController::class, 'confirmacao'])
        ->name('aluno.confirmacao');
        Route::get('/aluno/index', [AlunoController::class, 'index'])
        ->name('aluno');
        Route::get('/aluno/academico', [AlunoController::class, 'academico'])
        ->name('aluno.academico');
        Route::get('/aluno/editForm/{id}', [AlunoController::class, 'editForm'])
        ->name('aluno.form.edit');
        Route::post('/aluno/edit/{id}', [AlunoController::class, 'edit'])
        ->name('aluno.editar');
        Route::get('/aluno/delete/{id}', [AlunoController::class, 'delete'])
        ->name('aluno.delete');

        //Funcionarios 

        Route::get('funcionario', [FuncionarioController::class, 'index'])
        ->name('funcionario');
        Route::get('/funcionario/form', [FuncionarioController::class, 'form'])
        ->name('funcionario.form');
        Route::post('/funcionario/create', [FuncionarioController::class, 'create'])
        ->name('funcionario.create');
        Route::get('/funcionario/editForm/{id}', [FuncionarioController::class, 'editForm'])
        ->name('funcionario.form.edit');
        Route::post('/funcionario/edit/{id}', [FuncionarioController::class, 'edit'])
        ->name('funcionario.editar');
        Route::get('/funcionario/delete/{id}', [FuncionarioController::class, 'delete'])
        ->name('funcionario.delete');

        Route::get('professor', [ProfessorController::class, 'index'])
        ->name('professor');
        Route::get('/professor/form', [ProfessorController::class, 'form'])
        ->name('professor.form');
        Route::post('/professor/create', [ProfessorController::class, 'create'])
        ->name('professor.create');
        Route::get('/professor/editForm/{id}', [ProfessorController::class, 'editForm'])
        ->name('professor.form.edit');
        Route::post('/professor/edit/{id}', [ProfessorController::class, 'edit'])
        ->name('professor.editar');
        Route::get('/professor/delete/{id}', [ProfessorController::class, 'delete'])
        ->name('professor.delete');

         //Curso

         Route::get('curso', [CursoController::class, 'index'])
         ->name('curso');
         Route::get('/curso/form', [CursoController::class, 'form'])
         ->name('curso.form');
         Route::post('/curso/create', [CursoController::class, 'create'])
         ->name('curso.create');
         Route::get('/curso/editForm/{id}', [CursoController::class, 'editForm'])
         ->name('curso.form.edit');
         Route::post('/curso/edit/{id}', [CursoController::class, 'edit'])
         ->name('curso.editar');
         Route::get('/turma/delete/{id}', [TurmaController::class, 'delete']);

        //Turmas

        Route::get('turma', [TurmaController::class, 'index'])
        ->name('turma');
        Route::get('/turma/form', [TurmaController::class, 'form'])
        ->name('turma.form');
        Route::post('/turma/create', [TurmaController::class, 'create'])
        ->name('turma.create');
        Route::get('/turma/editForm/{id}', [TurmaController::class, 'editForm'])
        ->name('turma.form.edit');
        Route::post('/turma/edit/{id}', [TurmaController::class, 'edit'])
        ->name('turma.editar');
        Route::get('/turma/delete/{id}', [TurmaController::class, 'delete'])
        ->name('turma.delete');

        //Disciplina

        Route::get('disciplina', [DisciplinaController::class, 'index'])
        ->name('disciplina');
        Route::get('/disciplina/form', [DisciplinaController::class, 'form'])
        ->name('disciplina.form');
        Route::post('/disciplina/create', [DisciplinaController::class, 'create'])
        ->name('disciplina.create');
        Route::get('/disciplina/editForm/{id}', [DisciplinaController::class, 'editForm'])
        ->name('disciplina.form.edit');
        Route::post('/disciplina/edit/{id}', [DisciplinaController::class, 'edit'])
        ->name('disciplina.editar');
        Route::get('/disciplina/delete/{id}', [DisciplinaController::class, 'delete'])
        ->name('disciplina.delete');

        //Relátorio

        Route::get('/relatorio/aluno/{id}', [RelatorioController::class, 'gerarRelatorioAluno'])
        ->name('relatorio.aluno');


});

// Rotas para usuários autenticados
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// Rota pública com redirecionamento baseado no nível de acesso
Route::get('/', function () {
    if (auth()->check()) {
        // Redireciona para o dashboard do admin ou do usuário
        return auth()->user()->role === 'admin'
            ? redirect()->route('admin.dashboard')
            : redirect()->route('dashboard');
    }
   

    // Redireciona para a página de login se não estiver autenticado
    return redirect()->route('login');
})->name('home');

require __DIR__.'/auth.php';
