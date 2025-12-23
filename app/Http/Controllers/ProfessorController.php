<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{
    public function index(){
        $professores = Professor::all();
        return view('professor.professor', compact('professores'));
    }
    public function form(){
        return view('professor.insertProfessor');
    }
    public function create(Request $request){
        $request->validate([
            'nome' => 'required|string',
            'sexo' => 'required|string',
            'estado_civil' => 'required|string',
            'residencia' => 'required|string',
            'contacto' => 'required|string',
            'nivel_academico' => 'required|string',
            'area_formacao' => 'required|string'
            
        ]);

        $professor = Professor::create([ 
        'nome' => $request->nome,
        'sexo' => $request->sexo,
        'estado_civil' => $request->estado_civil,
        'residencia' => $request->residencia,
        'contacto' => $request->contacto,
        'nivel_academico' => $request->nivel_academico,
        'area_formacao' => $request->area_formacao
        ]);
        

        return redirect()->Route('professor')->with('sucess', 'Professor cadastrado com sucesso!');

      // return redirect()->back()->with('sucess', 'Turma cadastrado com sucesso!');
    }
    public function editForm($id){
        $professor = Professor::FindorFail($id);
        return view('professor.editProfessor', compact('professor'));
    }
    public function edit(Request $request, $id){
        $professor = Professor::FindorFail($id);
        $request->validate([
            'nome' => 'required|string',
            'sexo' => 'required|string',
            'estado_civil' => 'required|string',
            'residencia' => 'required|string',
            'contacto' => 'required|string',
            'nivel_academico' => 'required|string',
            'area_formacao' => 'required|string'
        ]);
        $professor->update($request->all());

        return redirect()->route('professor')->with('sucess', 'Professor editado com sucesso!');
    }
    public function delete($id){
        $professor = Professor::FindorFail($id);
        
        $professor->delete();
        return redirect()->route('professor')->with('sucess', 'Professor apagado com sucesso!');
        
    }
}
