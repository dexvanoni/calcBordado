@extends('layouts.app')
 
@section('content')
<div class="container">
    

    <div class="row  justify-content-between">

            <div class="col-10">
                <h2>Administração de Usuários PERMITIDOS</h2>
            </div>
            <div class="col-2">
                <a class="btn btn-success" href="{{ route('permitidos.create') }}"> Autorizar novo Usuário</a>
            </div>

    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Email</th>
            <th>Dias de utilização</th>
            <th>Expira em</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($permitidos as $permitido)
        <tr>
            <td>{{ $permitido->email }}</td>
            <td>{{date('d/m/Y', strtotime($permitido->created_at)) }}</td>
            <td>{{date('d/m/Y', strtotime($permitido->created_at->copy()->addYear())) }}
                <?php 
                    $dt_exp = $permitido->created_at->copy()->addYear();
                    $dt_now = \Carbon\Carbon::now();
                        if($dt_exp->gt($dt_now)){
                            ?>
                            <i style="color: green" class="fas fa-check"></i>
                        <?php } else {
                        ?>
                            <i title="Já expirou" style="color: red" class="fas fa-skull-crossbones"></i>
                        <?php }
                ?>
            </td>
            <td>
                <form action="{{ route('permitidos.destroy',$permitido->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('permitidos.show',$permitido->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('permitidos.edit',$permitido->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $permitidos->links() !!}
      </div>
@endsection