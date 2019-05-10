<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Services\SocialFacebookAccountService;
use App\Permitido;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class SocialAuthFacebookController extends Controller
{
    public function calc(Request $request)
    {
        dd($request);
        exit;
    }


    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback(SocialFacebookAccountService $service)
    {
        
       $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
        auth()->login($user);
        //dd($user);

        // se o usuário existe na tabela permitidos, ele entra, se não, sai
        $consulta = DB::table('permitidos')->where('email', '=', $user->email)->count();
        $permitido = DB::table('permitidos')->where('email', '=', $user->email)->first();

        //$consulta = 1;
        $con_parametros = DB::table('parametros')->where('user_id', '=', $user->id)->count();
        $parametros = DB::table('parametros')->where('user_id', '=', $user->id)->get();

        //dd($parametros);
        //exit;

        if ($consulta == 0) {
            Session::flush();
            return redirect()->route('inicio')
                        ->with('success','Você ainda não possui acesso à Calculadora de Bordados Eletrônicos.');
                }else{

                    $dt_exp = Carbon::parse($permitido->created_at)->addYear(1);
                    $dt_now = Carbon::now();

                        if($dt_exp->gt($dt_now)){
                            
                            Session::put('usuario', $user->email);
                            //if ($user->email == 'dex.vanoni@gmail.com') {
                            //    return redirect()->to('administracao');
                            //}else{
                                if ($con_parametros > 0) {
                                   Session::put('novo', 'n');
                                }else{
                                    $parametros = collect([]);
                                    Session::put('novo', 'y');
                                }
                                return view('home', compact('parametros'));        
                         } else {
                            Session::flush();
                            return redirect()->route('inicio')
                                ->with('success','Seu acesso já expirou!! Favor clicar em Solicitar Acesso.');
                         }
                

                
               // }
                
            }        
    }
}
