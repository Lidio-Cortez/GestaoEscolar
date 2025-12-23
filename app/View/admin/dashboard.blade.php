@extends('layouts.app')

@section('content')
<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/5 bg-gray-800 text-white min-h-screen p-4">
        <h2 class="text-2xl font-bold mb-6">Painel Admin</h2>
        <ul>
            <li><a href="#" class="block py-2 hover:text-gray-300">Dashboard</a></li>
            <li><a href="#" class="block py-2 hover:text-gray-300">Alunos</a></li>
            <li><a href="#" class="block py-2 hover:text-gray-300">Cursos</a></li>
            <li><a href="#" class="block py-2 hover:text-gray-300">Professores</a></li>
        </ul>
    </div>

    <!-- Conteúdo -->
    <div class="flex-1 p-8 bg-gray-100">
        <h1 class="text-3xl font-bold mb-6">Dashboard do Administrador</h1>

        <div class="grid grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow">
                <h3 class="text-lg font-semibold">Total de Alunos</h3>
                <p class="text-2xl mt-2">{{ $totalAlunos }}</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow">
                <h3 class="text-lg font-semibold">Total de Professores</h3>
                <p class="text-2xl mt-2">{{ $totalProfessores }}</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow">
                <h3 class="text-lg font-semibold">Total de Cursos</h3>
                <p class="text-2xl mt-2">{{ $totalCursos }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
