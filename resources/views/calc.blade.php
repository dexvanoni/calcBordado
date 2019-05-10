<div class="col">
    <form action="" method="get">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label><strong>Número de pontos da matriz:</strong></label>
                    <input class="form-control" type="text" name="pontos" id="pontos" placeholder="em milhares">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label><strong> Número de cores:</strong></label>
                    <input class="form-control" type="number" name="cores" id="cores">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label><strong> Valor do tecido:</strong></label>
                    <input class="form-control" type="text" name="tecido" id="tecido" placeholder="NÃO colocar vírgula">
                </div>
            </div>
        </div>
        <hr>
                <div class="row">

                <div class="col-">
                    <label><strong> Cobrar Desenvolvimento da matriz:</strong></label>
                    <div class="radio">
                        <label>
                            <input type="radio" id="desenv" name="desenvolvimento" value="S"> Sim    
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" id="desenv" name="desenvolvimento" value="N"> Não
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" id="desenv2" name="desenvolvimento2" value="D"> Só desenvolver
                        </label>
                    </div>
                </div>
                 <div class="col-4 mx-auto">
                <label><strong>Selecione as opções de base:</strong></label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="entretela" id="entret" value="e"> Entretela
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="tnt" id="tn" value="t"> TNT   
                    </label>
                </div>
            </div>
            <div class="col-4">
                <label><strong> Tamanho do bastidor:</strong></label>
                <p></p>
                <div class="row">
                    <div class="col">
                        <input class="form-control" type="text" name="t1" id="t1" placeholder="cm">    
                    </div>
                    X
                    <div class="col">
                        <input class="form-control" type="text" name="t2" id="t2" placeholder="cm">    
                    </div> 
                </div>                                               
            </div>
        </div>
        <hr>
        <div class="row">   
            <div class="col">
                <div class="form-group">
                    <label><strong>Quantidade de itens para o mesmo trabalho:</strong></label>
                    <input class="form-control" type="text" name="qtn" id="qtn">
                </div>
            </div>
            <div class="col">
                 <div class="form-group">
                    <label><strong> Desconto:</strong></label>
                    <input class="form-control" type="number" name="desconto" id="desconto" placeholder="Somente números separados por pontos">
                </div>
            </div>
        </div>                  
    </form>
    <div class="row">
        <div class="col-md-2 offset-md-10">
            <button type="button" id="calcula" class="btn btn-success">Calcular  <i class="fas fa-calculator"></i></button>    
        </div>
    </div>

    <div class="row" id="pagamento">
        <div class="col-12 mx-auto align-items-center">
            <center><h1><span id="total"></span></h1></center>
            <center><h6 style="color: red"><span id="texto"></span></h6></center>
        </div>
    </div>



</div>
