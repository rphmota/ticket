<?php

namespace App\Http\Controllers;

use App\Sector;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('front.login.login');
    }

    public function auth(Request $request)
    {

        $user = DB::table('users')->where('cpf',$request->login)->first();
        if ($user) {
            if (md5($request->password)==$user->password) {
                $setorNome = DB::table('sectors')->where('id',$user->sector_id)->first();
                session([
                    'user_name' => $user->name,
                    'nivel' => $user->nivel_acesso,
                    'cpf' => $user->cpf,
                    'setor' => $user->sector_id,
                    'setor_nome' => $setorNome->name ?? 'Sem Setor'
                ]);
                return redirect()->route('login.home');
            } else {
                return redirect()->route('login.index')->with('error',' Senha Invalida tente novamente!!');
            }
        } else {
            return redirect()->route('login.index')->with('error',' Usuario Invalido tente novamente!!');
        }


    }

    public function home()
    {
        return view('front.dashboard.index');
    }
}
