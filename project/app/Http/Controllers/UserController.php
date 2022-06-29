<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserController extends Controller
{

    public function registUser (Request $request){


        $email = $_POST['inputemail'];
        $confirmEmail = $_POST['confirmemail'];
        $senha = $_POST['inputsenha'];
        $confirmSenha = $_POST['confirmsenha'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cpf = $_POST['cpf'];

        if ($email != $confirmEmail) {
            return redirect()->route('Tela-Principal')->with('error', 'E-mails diferentes');
        }

        if ($senha != $confirmSenha) {
            return redirect()->route('Tela-Principal')->with('error', 'Senhas diferentes');
        }

        $senhaCode = bcrypt($request->inputsenha);

        $user = User::Create(
            ['email'=>$confirmEmail, 'password'=>$senhaCode, 'name'=>$nome, 'last_name'=>$sobrenome, 'cpf'=>$cpf]
        );

        if ($user->save()){
            Auth::loginUsingId($user->id);
            return redirect()->route('home');
        }else {
            return back()->with('error', 'erro de conexão');
        }
    }

}
