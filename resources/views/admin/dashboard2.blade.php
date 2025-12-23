@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Painel do Administrador</h1>
        <p>Bem-vindo, {{ auth()->user()->name }}!</p>

    </div>
@endsection
