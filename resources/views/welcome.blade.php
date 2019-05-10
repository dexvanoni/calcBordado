<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calculadora de Bordados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ route('red') }}">Calculadora</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="#" data-toggle="modal" data-target="#pg"> Solicitar Acesso</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                CALCULADORA DE BORDADOS ELETRÔNICOS
            </div>
                @if (session('success'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            <div class="m-b-md">
                <img src="/imagens/logo.png" width="100px" height="100px"><br>

                Sistema desenvolvido por DF Bordados <br>
                Contato: (67) 99122-4547 - WhatsApp
            </div>

            <div class="links">
                <a href="https://facebook.com/dfembroidery">Facebook</a>
                <a href="https://laracasts.com">Instagram</a>
                <a href="https://laravel-news.com">Email</a>
                <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/loFtozxZG0s" >VÍDEO EXPLICATIVO</a>
            </div>
            <!-- Large modal -->
            <div class="modal" tabindex="-1" role="dialog" id="myModal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Serviços da DF Bordados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                
                  <li>
                      Bordados em geral
                  </li>
                  <li>
                      Desenvolvimento de matrizes
                  </li>
                  <li>
                      Conversão de matrizes para qualquer extensão aceita por sua máquina de bordar
                  </li>
                  <li>
                      Venda de patchs termocolantes
                  </li>
                  <li>
                        Contatos:<br>
                        (67) 99122-4547 - WhatsApp <br>
                        dfabordados@gmail.com
                    
                </li>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            
        </div>
    </div>
</div>
</div>


</div>
</div>
<!-- Modal PAGSEGURO -->
<div class="modal fade" id="pg" tabindex="-1" role="dialog" aria-labelledby="example" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="example">Solicitar Acesso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <div class="row ">
        <div class="col">
            <center><h4>Para solicitar acesso a Calculadora de Bordados por 1 ANO clique no botão do PagSeguro, realize o pagamento e informe a DF Bordados sobre a sua aquisição de Acesso a Calculadora de Bordaddos Eletrônicos</h4></center>
            <center><p><a href="#" class="btn btn-dark" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/loFtozxZG0s" >VÍDEO EXPLICATIVO</a></p></center>
        </div>
    </div>
    <hr>
    <div class="row ml-3 align-items-center">
            <div class="col">
            <!-- INICIO DO BOTAO PAGSEGURO --><a class="mx-auto" href="javascript:void(0)" onclick="PagSeguroLightbox('B4727B53F8F89FE224DADFAE53A9A8C7'); return false;"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar-azul.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a><script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script><!-- FIM DO BOTAO PAGSEGURO -->
        </div>
        <div class="col">
            <p>DF Bordados</p>
            <p>(67) 99122-4547 - WhatsApp</p>
            <p>Email: dfabordados@gmail.com</p>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</div>
</div>
</div>
</div>


<!--MODAL VÍDEO-->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div>
          <iframe width="100%" height="350" src=""></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!--TERMINA MODAL VÍDEO-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
   $(window).on('load',function(){
    $('#myModal').modal('show');
});
</script>

<script type="text/javascript">
    //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
function autoPlayYouTubeModal(){
  var trigger = $("body").find('[data-toggle="modal"]');
  trigger.click(function() {
    var theModal = $(this).data( "target" ),
    videoSRC = $(this).attr( "data-theVideo" ), 
    videoSRCauto = videoSRC+"?autoplay=1" ;
    $(theModal+' iframe').attr('src', videoSRCauto);
    $(theModal+' button.close').click(function () {
        $(theModal+' iframe').attr('src', videoSRC);
    });   
  });
}
$(document).ready(function(){
  autoPlayYouTubeModal();
});
</script>
</body>
</html>
