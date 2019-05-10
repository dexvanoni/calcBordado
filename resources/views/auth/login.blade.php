@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <center> <img src="/imagens/logo.png" width="100px" height="100px"><br></center>
                    <center><h5>Email: dfabordados@gmail.com</h5></center>
                    <center><h5>Telefone: (67) 99122-4547 - WhatsApp</h5></center>
                    <hr>
                    <center><form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                              <a href="{{url('/redirect')}}" class="btn btn-primary">Acesso com Facebook</a>
                          </div>
                      </div>
                  </form>
                  <label>Não possuo conta no Facebook</label><a href="#" data-toggle="modal" data-target="#modalExemplo"> Clique aqui!</a>
              </center>
          </div>
      </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Criar conta Facebook</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <p>Para manter a atualização constante da nossa Calculadora de Bordados, solicitamos aos usuários
        a criação de um perfil no Facebook para manter a integridade das informaçãoes de login do sistema!
    Este processo é importante para que a calculadora esteja sempre disponível e ajudando os nossos colaboradores a obter um resultado satisfatório.</p>
    <p>Equipe de Desenvolvimento DF Bordados</p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não concordo!</button>
    <a href="http://www.facebook.com" class="btn btn-primary" >Criar perfil no Facebook</a>
</div>
</div>
</div>
</div>



@endsection
