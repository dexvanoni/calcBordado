@php
if (isset($_GET['pontos'])) {

	$pontos = $_GET['pontos'];
	$bastidor = $_GET['bastidor'];
	$trabalho = $_GET['operacao'];
	$desenvolvimento = $_GET['desenvolvimento'];
	
	// o número de cores reflete na hora trabalhada
	$cores = $_GET['cores'];
	// desenvolvimento da matriz

	if ($desenvolvimento == 'S') {
		$desenv = ($pontos/1000)*1;
	} else {
		$desenv = 0;
	}

		//cálculo de entretela e TNT

		//140.000 cm quadrado é o metro da entretela = 4.9
		// bastidor 14x14 = 196cm quadrados = 0.00686
		//bastidor 20x20 = 400cm quadraos = 0.014
		//bastidor 20x28 = 560cm quadrados = 0.019
	if ($_GET['bastidor'] == '14x14') {
		$entretela = 0.00686;
		$tnt = 0.0026;
	}
	if ($_GET['bastidor'] == '20x20') {
		$entretela = 0.014;
		$tnt = 0.0054;
	}
	if ($_GET['bastidor'] == '20x28') {
		$entretela = 0.019;
		$tnt = 0.0076;
	}	

	if (!isset($_GET['entretela'])) {
		$entretela = 0;
	}
	if (!isset($_GET['tnt'])) {
		$tnt = 0;			
	}

	//caso quiser colocar mais itens de tecido, ir colocando IF e alterando o valor da variável val_mil_pontos
	if ($_GET['operacao'] == 'body') {
		$val_mil_pontos = 1; // valor para cada 1000 pontos
	} elseif ($_GET['operacao'] == 't_lavabo') {
		$val_mil_pontos = 0.6;
	} elseif ($_GET['operacao'] == 't_rosto') {
		$val_mil_pontos = 0.7;
	} elseif ($_GET['operacao'] == 't_banho') {
		$val_mil_pontos = 0.8;
	} elseif ($_GET['operacao'] == 'path') {
		$val_mil_pontos = 0.5;
	} elseif ($_GET['operacao'] == 'c_polo') {
		$val_mil_pontos = 1;
	} elseif ($_GET['operacao'] == 'c_mil_br') {
		$val_mil_pontos = 0.7;
	} elseif ($_GET['operacao'] == 'c_mil_cam') {
		$val_mil_pontos = 1;
	} elseif ($_GET['operacao'] == 'bol_mil_cor') {
		$val_mil_pontos = 1;
	} elseif ($_GET['operacao'] == 't_mil_az') {
		$val_mil_pontos = 0.8;
	} elseif ($_GET['operacao'] == 't_mil_vd') {
		$val_mil_pontos = 0.8;
	}  elseif ($_GET['operacao'] == 't_mil_az_fab') {
		$val_mil_pontos = 0.7;
	} elseif ($_GET['operacao'] == 't_mil_vd_fab') {
		$val_mil_pontos = 0.7;
	} elseif ($_GET['operacao'] == 'desenv') {
		$val_mil_pontos = 0.3;
	}


	//valor do tubo de 4000m = 11.9 
	//divide 4000 por 11.9
	$val_linha_metro = 0.002975; //por metro de linha


	//valor do tubo de 16000m = 24.00 
	//divide 16000 por 24.00
	$val_bobina_metro = 0.0015; //por metro de bubina

	$metros_linha = ($pontos/1000)*3.857;
	$metros_bobina = ($pontos/1000)*1.28;

	$linha_sup = $val_linha_metro*$metros_linha;
	$bob = $val_bobina_metro*$metros_bobina;
	
	//cobrar 1 real por hora de desgaste da máquina
	$tempo = ($pontos*2)/1000;
	$desgaste = $tempo/60;

	
	//levando em consideração 2000 reais por mês se 1 linha - hora trabalhada = 2.77
	//levando em consideração 2500 reais por mês se 2 ou 3 linhas - hora trabalhada = 3.47
	//levando em consideração 3000 reais por mês se 4 ou 8 linhas - hora trabalhada = 4.16
	//levando em consideração 4000 reais por mês se > 8 linhas - hora trabalhada = 5.55
	if ($cores == 1) {
		$hora_trabalhada = (2.77*$tempo)/60;
	} elseif ($cores > 1 && $cores < 4) {
		$hora_trabalhada = (3.47*$tempo)/60;
	} elseif ($cores > 3 && $cores < 9) {
		$hora_trabalhada = (4.16*$tempo)/60;
	} elseif ($cores > 8) {
		$hora_trabalhada = (5.55*$tempo)/60;
	}
	

	// valor do tecido que foi aplicado o bordado
	$tecido = $_GET['tecido'];

	//desconto progressivo
	// Para toalhas = (5% >= 30),(8% >= 50),(10% >= 100)
	// Para Bodys = (10% >= 12) 
	$quantidade = $_GET['qtn'];
	$desconto = $_GET['desconto'];
	$val_desconto = 0;

	if ($desconto == 'S' && $trabalho == 't_lavabo' || $trabalho == 't_rosto' || $trabalho == 't_banho') {
		if ($quantidade >= 30) {
			$val_desconto = 5.0/100.0;	
		}
		if ($quantidade >= 50) {
			$val_desconto = 8.0/100.0;	
		}
		if ($quantidade >= 100) {
			$val_desconto = 10.0/100.0;	
		}
		$valor = round((((($pontos/1000)*$val_mil_pontos)+$linha_sup+$bob+$desgaste+$hora_trabalhada+$tecido+$entretela+$tnt)*$quantidade)+$desenv, 2);
		$valor_com_desconto = round($valor-($val_desconto*$valor), 2);
		//echo $valor." - ".$valor_com_desconto;
		//exit;
	}else{
		$valor = round((((($pontos/1000)*$val_mil_pontos)+$linha_sup+$bob+$desgaste+$hora_trabalhada+$tecido+$entretela+$tnt)*$quantidade)+$desenv, 2);	
	}

	if ($_GET['operacao'] == 'desenv') {
		$valor = round($pontos/1000, 2);
	}

}
@endphp