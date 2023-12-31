{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Editar Tipo')

@section('content')
        <h1>Editar Tipo Ingrediente</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{ route('tipo_ingrediente.update', $tipo_ingrediente->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="{{ $tipo_ingrediente->nome }}">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" value="{{ $tipo_ingrediente->descricao }}">
            </div>
            
            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <a href="{{ route('tipo_ingrediente.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
        @stop

        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
        @stop
        
        @section('js')
            <script>
                console.log('Hi!');
            </script>
        @stop
        