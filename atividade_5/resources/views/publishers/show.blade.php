@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Detalhes da Editoras</h1>

    <div class="card">
        <div class="card-header">
            Categoria: {{ $publisher->name }}
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $publisher->id }}</p>
            <p><strong>Nome:</strong> {{ $publisher->name }}</p>
            <p><strong>Address:</strong> {{ $publisher->address }}</p>
        </div>
    </div>

    <a href="{{ route('publishers.index') }}" class="btn btn-secondary mt-3">
        <i class="bi bi-arrow-left"></i> Voltar
    </a>
</div>
@endsection

