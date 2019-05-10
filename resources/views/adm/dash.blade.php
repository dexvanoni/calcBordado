@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
			<div class="row justify-content-center">
				

						<a style="margin-right: 30px" href="{{ route('permitidos.create') }}" class="btn btn-primary">LIBERAR USUÁRIO</a>


						<a style="margin-right: 30px" href="{{ route('permitidos.index') }}" class="btn btn-success">LISTA DE USUÁRIOS</a>

						<a style="margin-right: 30px" href="{{ route('red') }}" class="btn btn-warning">CALCULADORA</a>
				
			</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection