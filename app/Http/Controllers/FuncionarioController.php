<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    //Index pagina inicial mostra todos os funcionarios
    public function index(){
        $funcionarios = Funcionario::all();
        return view('funcionario.funcionario', compact('funcionarios'));
    }
    public function form(){
        return view('funcionario.insertFuncionario');
    }
    public function create(Request $request){
        $request->validate([
            'nome' => 'required|string',
            'sexo' => 'required|string',
            'estado_civil' => 'required|string',
            'residencia' => 'required|string',
            'telefone' => 'required|string',
            'cargo' => 'required|string',
            'estado' => 'required|string'
            
        ]);

        $funcionario = Funcionario::create([ 
        'nome' => $request->nome,
        'sexo' => $request->sexo,
        'estado_civil' => $request->estado_civil,
        'residencia' => $request->residencia,
        'telefone' => $request->telefone,
        'cargo' => $request->cargo,
        'estado' => $request->estado
        ]);
        

        return redirect()->Route('funcionario')->with('sucess', 'Funcionario cadastrado com sucesso!');

      // return redirect()->back()->with('sucess', 'Turma cadastrado com sucesso!');
    }
    public function editForm($id){
        $funcionario = Funcionario::FindorFail($id);
        return view('funcionario.editFuncionario', compact('funcionario'));
    }
    public function edit(Request $request, $id){
        $funcionario = Funcionario::FindorFail($id);
        $request->validate([
           'nome' => 'required|string',
            'sexo' => 'required|string',
            'estado_civil' => 'required|string',
            'residencia' => 'required|string',
            'telefone' => 'required|string',
            'cargo' => 'required|string',
            'estado' => 'required|string'
        ]);
        $funcionario->update($request->all());

        return redirect()->route('funcionario')->with('sucess', 'Funcionario editado com sucesso!');
    }
    public function delete($id){
        $funcionario = Funcionario::FindorFail($id);
        
        $funcionario->delete();
        return redirect()->route('funcionario')->with('sucess', 'Funcionario apagado com sucesso!');
        
    }
}
