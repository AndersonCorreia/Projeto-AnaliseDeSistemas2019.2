<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DB\UserDAO;

require_once __DIR__."/../../../resources/views/util/layoutUtil.php";

class UserController extends Controller{   

    //retorna a tela de entrar
    public function telaEntrar()
    {
        return view('login', [ 'loginError' => false]);
    }
    //retorna a tela de entrar com o aviso de erro no login
    public function telaEntrarError()
    {
        return view('login', [ 'loginError' => true]);
    }

    /**
     * Função para realizar o login do usuario, preencher a sessão com o ID, nome e Tipo do usuario
     *
     * @param [type] $request
     * @return void
     */
    public function login(Request $request){
        $user = $request["usuario"];
        $senha = $request["senha"];
        $DAO = new UserDAO();
        $usuario = $DAO->UserLogin($user, $senha);//lança uma exception se as informações estiverem incorretas

        $request->session()->regenerate();//a documentação falava que era para previnir um ataque chamado "session fixation"
        session(["ID" => $usuario["ID"] ]);

        return redirect()->route("cadastro.show");
    }
    
    /**
     * faz o logout do usuario apagando todos os dados da sessão
     *
     * @param [type] $request
     * @return void
     */
    public function logout(Request $request){

        $request->session()->flush();
        return redirect()->route("telaEntrar");
    }

}
