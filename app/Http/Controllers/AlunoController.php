<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;
use Illuminate\Support\Facades\DB;
use PDF;

class AlunoController extends Controller{
    public function index(){
        $aluno = Aluno::all();
        return view('aluno.aluno', compact('aluno'));
    }
    public function form(){
        $turma = Turma::all();
        return view('aluno.insertAluno', compact('turma'));
    }
    public function academico(){
        
    }
    public function confirmacao(){
        $aluno = Aluno::all();
        return view('d', compact('aluno'));
    }
    public function editForm($id){
        $aluno = Aluno::FindorFail($id);
        return view('aluno.editarAluno', compact('aluno'));
    }
    public function edit(Request $request, $id){
        $aluno = Aluno::FindorFail($id);
        $request->validate([
            'bi' => 'required|string',
            'nome' => 'required|string',
            'pai' => 'required|string',
            'mae' => 'required|string',
            'contacto' => 'required|string',
            'sexo' => 'required|string',
            'data_nascimento' => 'required|date',
            'provincia' => 'required|string',
            'municipio' => 'required|string',
            'residencia' => 'required|string'
        ]);
        $aluno->update($request->all());

        return redirect()->route('aluno')->with('sucess', 'Aluno editado com sucesso!');
    }
    public function create(Request $request){
        $request->validate([
            'bi' => 'required|string',
            'nome' => 'required|string',
            'pai' => 'required|string',
            'mae' => 'required|string',
            'contacto' => 'required|string',
            'sexo' => 'required|string',
            'data_nascimento' => 'required|date',
            'provincia' => 'required|string',
            'municipio' => 'required|string',
            'residencia' => 'required|string',
            'turma' => 'required|integer'
        ]);
        // Iniciar transação para evitar inconsistência
        DB::beginTransaction();

        try {
            // Buscar a turma escolhida
            $turma = Turma::where('id_turma', $request->turma)->lockForUpdate()->first();
    
            // Verifica se tem vagas
            if ($turma->lotacao <= 0) {
                DB::rollBack();
                return back()->with('erro', 'A turma selecionada já está lotada.');
            }

            // Reduzir uma vaga da turma
            $turma->lotacao = $turma->lotacao - 1;
            $turma->save();

            // Confirmar operação
            DB::commit();

        $aluno = Aluno::create([
            'bi' => $request->bi,
            'nome' => $request->nome,
            'pai' => $request->pai,
            'mae' => $request->mae,
            'contacto' => $request->contacto,
            'sexo' => $request->sexo,
            'data_nascimento' => $request->data_nascimento,
            'provincia' => $request->provincia,
            'municipio' => $request->municipio,
            'residencia' => $request->residencia,
            'turma' => $request->turma
        ]);
        
        return redirect()->route('aluno.form')->with('sucess', 'Aluno cadastrado com sucesso!');
        /*return redirect()->Route('relatorio.aluno', $aluno->id)->with('sucess', 'Turma cadastrado com sucesso!');*/

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('erro', 'Erro inesperado: '.$e->getMessage());
        }
      // return redirect()->back()->with('sucess', 'Turma cadastrado com sucesso!');
    }
    public function delete($id){
        $aluno = Aluno::FindorFail($id);
        
        try {
            
            // Buscar a turma escolhida
            $turma = Turma::where('id_turma', $aluno->turma)->lockForUpdate()->first();
            
            // Verifica se tem vagas
            if ($turma->lotacao <= 0) {
                DB::rollBack();
                return back()->with('erro', 'A turma selecionada já está lotada.');
            }
            // Reduzir uma vaga da turma
            $turma->lotacao = $turma->lotacao + 1;
            $turma->save();

            // Confirmar operação
            DB::commit();

        $aluno->delete();
        return redirect()->route('aluno')->with('sucess', 'Aluno apagado com sucesso!');
        } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('erro', 'Erro inesperado: '.$e->getMessage());
         }

    }
}
