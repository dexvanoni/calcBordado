
@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-between">

        <div class="col-10">
            <h2>Edita Usuário</h2>
        </div>
        <div class="col-2">
            <a class="btn btn-primary" href="{{ route('permitidos.index') }}"> Voltar</a>
        </div>

    </div>
    <hr>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('permitidos.update',$permitido->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col ">
                <div class="form-group">
                    <strong>Email: </strong>
                    <input type="email" name="email" value="{{ $permitido->email }}" class="form-control" placeholder="Email do Facebook">
                </div>
            </div>
        </div>
        <div class="col text-center">
          <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>


  </form>
</div>
@endsection