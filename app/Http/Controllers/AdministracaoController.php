<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class AdministracaoController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$usuario = Session::get('usuario');

    	if ($usuario == 'dex.vanoni@gmail.com'){
    		return view('adm.dash');
    	}else{
    		return redirect()->route('inicio')
                        ->with('success','Você não possui acesso à Administração da Calculadora de Bordados Eletrônicos.');
    	}

    	
    }
}
