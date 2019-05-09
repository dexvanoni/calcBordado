@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col margin-tb">
            <div class="pull-left">
                <h2> Ver Usuário</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('permitidos.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $permitido->email }}
            </div>
        </div>
    </div>
@endsection