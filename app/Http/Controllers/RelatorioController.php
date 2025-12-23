<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Aluno;
use App\Models\Turma;

class RelatorioController extends Controller
{
    public function gerarRelatorioAluno($id){
        $aluno = Aluno::FindorFail($id);
        $turma = Turma::FindorFail($aluno->turma);
        $pdf = PDF::loadView('relatorio.aluno', compact('aluno','turma'))->setPaper('a4', 'portrait');

        return $pdf->stream("Relatorio-Aluno-$id.pdf");
    }
}
