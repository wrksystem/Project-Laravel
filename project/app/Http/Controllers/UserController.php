<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

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

        if ($email =! $confirmEmail) {
            return redirect()->route('Tela-Principal')->with('error', 'E-mails diferentes');
        }

        if ($senha =! $confirmSenha) {
            return redirect()->route('Tela-Principal')->with('error', 'Senhas diferentes');
        }

        $user = User::Create(
            ['email'=>$email, 'senha'=>Hash::make($senha), 'nome'=>$nome, 'sobrenome'=>$sobrenome, 'cpf'=>$cpf]
        );

        if ($user->save()){
            return redirect()->route('Home');
        }else {
            return back()->with('error', 'erro de conexão');
        }


        return view('login');

    }
}
