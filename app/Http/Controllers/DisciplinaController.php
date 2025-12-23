<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;
use App\Models\Professor;

class DisciplinaController extends Controller
{
    public function index(){
        $allDisciplina = Disciplina::all();
        $allProfessor = Professor::all();
        return view('disciplina.disciplina', compact('allDisciplina', 'allProfessor'));
    }
    public function form(){
        $allProfessor = Professor::all();
        return view('disciplina.insertDisciplina', compact('allProfessor'));
    }
    public function create(Request $request){
        $request->validate([
            'disciplina' => 'required|string',
            'tipo_disciplina' => 'required|string',
            'professor' => 'required|integer'
        ]);
        
        Disciplina::create([
            'disciplina' => $request->disciplina,
            'tipo_disciplina' => $request->tipo_disciplina,
            'fk_professor' => $request->professor
        ]);

        return redirect()->back()->with('sucess', 'Disciplina cadastrado com sucesso!');
    }
    public function editForm($id){
        $disciplina = Disciplina::FindorFail($id);
        $allProfessor = Professor::all();
        return view('disciplina.editDisciplina', compact('disciplina', 'allProfessor'));
    }
    public function edit(Request $request, $id){
        $disciplina = Disciplina::FindorFail($id);
        $request->validate([
            'disciplina' => 'required|string',
            'tipo_disciplina' => 'required|string',
            'professor' => 'required|integer'
        ]);
        $disciplina->update($request->all());

        return redirect()->route('disciplina')->with('sucess', 'Disciplina editado com sucesso!');
    }
    public function delete($id){
        $disciplina = Disciplina::FindorFail($id);
        
        try {
            
          
        $disciplina->delete();
        return redirect()->route('disciplina')->with('sucess', 'Disciplina apagado com sucesso!');
        } catch (\Exception $e) {
        return back()->with('erro', 'Erro inesperado: '.$e->getMessage());
         }

    }
}
