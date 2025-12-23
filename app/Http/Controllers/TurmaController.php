<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Professor;

class TurmaController extends Controller
{
    public function index(){
        $allTurmas = Turma::all();
        $professores = Professor::all();
        return view('turma.Turma', compact('allTurmas', 'professores'));
    }
    public function form(){
        $professores = Professor::all();
        return view('turma.insertTurma', compact('professores'));
    }
    public function formUpdate($id){
        return view('turma.editTurma');
    }
    public function create(Request $request){
        $request->validate([
            'turma' => 'required|string',
            'sala' => 'required|integer',
            'lotacao' => 'required|integer',
            'turno' => 'required|string',
            'grau' => 'required|string',
            'curso' => 'required|string',
            'ano_academico' => 'required|string'
        ]);
        Turma::create([
            'turma' => $request->turma,
            'sala' => $request->sala,
            'lotacao' => $request->lotacao,
            'turno' => $request->periodo,
            'grau' => $request->grau,
            'curso' => $request->curso,
            'ano_academico' => $request->ano_academico
        ]);

        return redirect()->back()->with('sucess', 'Turma cadastrado com sucesso!');
    }
    public function editForm($id){
        $turma = Turma::FindorFail($id);
        $professores = Professor::all();
        return view('turma.editTurma', compact('turma', 'professores'));
    }
    public function edit(Request $request, $id){
        $turma = Turma::FindorFail($id);
        $request->validate([
            'turma' => 'required|string',
            'sala' => 'required|integer',
            'lotacao' => 'required|integer',
            'periodo' => 'required|string',
            'grau' => 'required|string',
            'curso' => 'required|string',
            'ano_academico' => 'required|string'
        ]);
        $turma->update($request->all());

        return redirect()->route('turma')->with('sucess', 'Turma editado com sucesso!');
    }
    public function delete($id){
     
        $turma = Turma::FindorFail($id);
        $turma->delete();
        return redirect()->route('turma')->with('sucess', 'Turma apagado com sucesso!');

        }
}
