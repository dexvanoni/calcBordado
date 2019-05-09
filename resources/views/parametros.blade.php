
@if (isset($parametros))
<div class="row">
    @if (Session::get('novo') == 'y')
    <button type="button" class="btn btn-danger showButton show">Novos Parâmetros</button>
    @else
    <button type="button" class="btn btn-danger showButton show">Atualizar Parâmetros</button>
    <button type="button" class="btn btn-danger hideButton hidden">Fecha Parâmetros</button>
    @endif
</div>
<p></p>
@endif


<div id="globais" class="hidden">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Definir Parâmetros Globais de Cálculo 
                    <a href="#" id="ajuda" data-toggle="tooltip" data-placement="top" title="Ajuda">
                        <i class="fas fa-question-circle"></i></a>
                    </div>
                    <div class="card-body">

                        @if (Session::get('novo') == 'y')
                        <form action="{{ route('parametros.store') }}" method="POST">
                            @csrf

                            @else
                            @if (isset($parametros))
                            <form action="{{ route('parametros.update', $parametros[0]->user_id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @endif
                                @endif
                                <h6 style="color: red">*Não utilizar vírgulas em nenhum campo!</h6>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row">
                                    <div class="col">
                                       <div class="form-group">
                                        <label for="mil_pontos">Valor para mil pontos<i class="fas fa-question-circle" title="Nunca utilize vírgulas. Separe os centavos com ponto. Ex: 4.5"></i></label>
                                        @if (Session::get('novo') == 'n')
                                        <input type="text" name="mil_pontos" class="form-control" id="mil_pontos" aria-describedby="mil_pontos" placeholder="Valor cobrado por cada 1000 pontos." pattern="^[^,]*[^ ,][^,]*$" required="required" value=
                                        @foreach ($parametros as $p)
                                        {{ $p->mil_pontos }}
                                        @endforeach />
                                        @else
                                        <input type="text" name="mil_pontos" class="form-control" id="mil_pontos" aria-describedby="mil_pontos" placeholder="Valor cobrado por cada 1000 pontos." pattern="^[^,]*[^ ,][^,]*$" required="required" />
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                   <div class="form-group">
                                    <label for="entretela">Entretela <i class="fas fa-question-circle" title="Nunca utilize vírgulas. Separe os centavos com ponto. Ex: 4.5"></i></label>
                                    @if (Session::get('novo') == 'n')
                                    <input type="text" name="entretela" class="form-control" id="entretela" aria-describedby="entretela" placeholder="Valor pago pela entretela (por metro)." pattern="^[^,]*[^ ,][^,]*$" required="required" value=
                                    @foreach ($parametros as $p)
                                    {{ $p->entretela }}
                                    @endforeach />
                                    @else
                                    <input type="text" name="entretela" class="form-control" id="entretela" aria-describedby="entretela" placeholder="Valor pago pela entretela (por metro)." pattern="^[^,]*[^ ,][^,]*$" required="required">
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                               <div class="form-group">
                                <label for="tnt">TNT <i class="fas fa-question-circle" title="Nunca utilize vírgulas. Separe os centavos com ponto. Ex: 4.5"></i></label>
                                @if (Session::get('novo') == 'n')
                                <input type="text" name="tnt" class="form-control" id="tnt" aria-describedby="tnt" placeholder="Valor pago pelo tnt (por metro)." pattern="^[^,]*[^ ,][^,]*$" required="required" value=
                                @foreach ($parametros as $p)
                                {{ $p->tnt }}
                                @endforeach />
                                @else
                                <input type="text" name="tnt" class="form-control" id="tnt" aria-describedby="tnt" placeholder="Valor pago pelo tnt (por metro)." pattern="^[^,]*[^ ,][^,]*$" required="required">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                           <div class="form-group">
                            <label for="linha_sup">Linha Superior <i class="fas fa-question-circle" title="Nunca utilize vírgulas. Separe os centavos com ponto. Ex: 4.5"></i></label>
                            @if (Session::get('novo') == 'n')
                            <input type="text" name="linha_sup" class="form-control" id="linha_sup" aria-describedby="linha_sup" placeholder="Valor pago pelo cone de linha de bordar de 4000m." pattern="^[^,]*[^ ,][^,]*$" required="required" value=
                            @foreach ($parametros as $p)
                            {{ $p->linha_sup }}
                            @endforeach />
                            @else
                            <input type="text" name="linha_sup" class="form-control" id="linha_sup" aria-describedby="linha_sup" placeholder="Valor pago pelo cone de linha de bordar de 4000m." pattern="^[^,]*[^ ,][^,]*$" required="required">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                       <div class="form-group">
                        <label for="linha_bob">Linha Bobina <i class="fas fa-question-circle" title="Nunca utilize vírgulas. Separe os centavos com ponto. Ex: 4.5"></i></label>
                        @if (Session::get('novo') == 'n')
                        <input type="text" name="linha_bob" class="form-control" id="linha_bob" aria-describedby="linha_bob" placeholder="Valor pago pelo cone de linha de bobina de 16000m." pattern="^[^,]*[^ ,][^,]*$" required="required" value=
                        @foreach ($parametros as $p)
                        {{ $p->linha_bob }}
                        @endforeach />
                        @else
                        <input type="text" name="linha_bob" class="form-control" id="linha_bob" aria-describedby="linha_bob" placeholder="Valor pago pelo cone de linha de bobina de 16000m." pattern="^[^,]*[^ ,][^,]*$" required="required">
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                   <div class="form-group">
                    <label for="pontos_min">Pontos/minuto <i class="fas fa-question-circle" title="Nunca utilize vírgulas ou pontos. Ex: 860"></i></label>
                    @if (Session::get('novo') == 'n')
                    <input type="text" name="pontos_min" class="form-control" id="pontos_min" aria-describedby="pontos_min" placeholder="Pontos por minuto da sua bordadeira." pattern="^[^,]*[^ ,][^,]*$" required="required" value=
                    @foreach ($parametros as $p)
                    {{ $p->pontos_min }}
                    @endforeach />
                    @else
                    <input type="text" name="pontos_min" class="form-control" id="pontos_min" aria-describedby="pontos_min" placeholder="Pontos por minuto da sua bordadeira." pattern="^[^,]*[^ ,][^,]*$" required="required">
                    @endif
                </div>
            </div>
            <div class="col">
               <div class="form-group">
                <label for="lucro">Lucro mensal <i class="fas fa-question-circle" title="Nunca utilize vírgulas ou pontos. Ex: 4000"></i></label>
                @if (Session::get('novo') == 'n')
                <input type="text" name="lucro" class="form-control" id="lucro" aria-describedby="lucro" placeholder="Estimativa de lucro mensal em reais." pattern="^[^,]*[^ ,][^,]*$" required="required" value=
                @foreach ($parametros as $p)
                {{ $p->lucro }}
                @endforeach />
                @else
                <input type="text" name="lucro" class="form-control" id="lucro" aria-describedby="lucro" placeholder="Estimativa de lucro mensal em reais." pattern="^[^,]*[^ ,][^,]*$" required="required">
                @endif
            </div>
        </div>

    </div>
    <div class="row">
        @if (Session::get('novo') == 'n')
        <button type="submit" class="btn btn-warning">Atualizar</button>
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        @else
        <button type="submit" class="btn btn-success">Salvar</button>
        @endif
    </div>

</form>
</div>
</div>
</div>
</div>
</div>