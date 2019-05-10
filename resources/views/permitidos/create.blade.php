    @extends('layouts.app')

    @section('content')
    <div class="container">


        <div class="row justify-content-between">

            <div class="col-10">
                <h2>Novo Usuário Permitido</h2>
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

        <form action="{{ route('permitidos.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <strong>Email do Facebook:</strong>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>


        </form>
    </div>
    @endsection