<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $allCursos = Curso::all();
        return view('curso.curso', compact('allCursos'));
    }
    public function form(){
        return view('curso.insertCurso');
    }
    public function create(Request $request){
        $request->validate([
            'curso' => 'required|string',
            'departamento' => 'required|string',
            'tipo' => 'required|string'
        ]);
        
        Curso::create([
            'curso' => $request->curso,
            'departamento' => $request->departamento,
            'tipo' => $request->tipo
        ]);

        return redirect()->back()->with('sucess', 'Curso cadastrado com sucesso!');
    }
    public function editForm($id){
        $curso = Curso::FindorFail($id);
        return view('curso.editCurso', compact('curso'));
    }
}
