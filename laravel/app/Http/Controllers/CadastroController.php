<?php

namespace App\Http\Controllers;

use App\DB\ClienteDAO;

require_once __DIR__."/../../../resources/views/util/layoutUtil.php";

class UserController extends Controller{   
    
    private $DAO;

    public function __Construct(){
        parent::__Construct();
        $DAO = new ClienteDAO();
    }

    public function criar(){

        $DAO->INSERT($request->input() );
    }

    public function editar(){

        $DAO->UPDATE($request->input() );
    }

    public function excluir(Request $request){
        
        $DAO->DELETEbyID($request->input("cliente_ID") );
    }

    public function telaEditar(){

        $variaveis = [
            'itensMenu' => getMenuLinks(),
            'paginaAtual' => "Editar ou excluir cadastro de cliente",
            'clientes' => $DAO->SELECT_ALL()
        ];

        return view("editarCadastro",$variaveis);
    }

    public function telaCadastrar(){

        $variaveis = [
            'itensMenu' => getMenuLinks(),
            'paginaAtual' => "Editar ou excluir cadastro de cliente",
        ];

        return view("cadastro",$variaveis);
    }

}
