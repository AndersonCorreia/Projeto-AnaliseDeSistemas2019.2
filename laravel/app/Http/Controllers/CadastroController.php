<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DB\EmpresaDAO;

require_once __DIR__."/../../../resources/views/util/layoutUtil.php";

class CadastroController extends Controller{   
    
    private $DAO;

    public function __construct(){
        //parent:: __Construct();
        $this->DAO = new EmpresaDAO();
    }

    public function criar(Request $request){

        if($this->DAO->SELECTbyCNPJ($request->input("CNPJ") ) ){
            $variaveis = [
                'itensMenu' => getMenuLinks(),
                'paginaAtual' => "Adicionar cadastro de cliente",
                'registro' => $request->input(),
                'erroCNPJ' => "já existe um cadastro com este CNPJ."
            ];

            return view("cadastro",$variaveis);
        }
        else {
            $this->DAO->INSERT($request->input() );
            return redirect()->route("cadastrosVinculados.show");
        }
    }

    public function editar(Request $request){

        $CNPJantigo = $this->DAO->SELECTbyID($request->input("ID"))["CNPJ"];
        if( $request->input("CNPJ") != $CNPJantigo && $this->DAO->SELECTbyCNPJ($request->input("CNPJ") ) ){
            $variaveis = [
                'itensMenu' => getMenuLinks(),
                'paginaAtual' => "Visualizar, editar ou excluir cadastro de cliente",
                'registro' => $request->input(),
                'erroCNPJ' => "já existe um cadastro com este CNPJ."
            ];
    
            return view("editarCadastro",$variaveis);
        }
        else {
            $this->DAO->UPDATE($request->input());
            return redirect()->route("cadastrosVinculados.show");
        }
    }

    public function cadastrosVinculados(Request $request){

        $this->DAO->UPDATE($request->input() );
        return redirect()->route("cadastrosVinculados.show");
    }

    public function telaCadastrosVinculados(){

        $variaveis = [
            'itensMenu' => getMenuLinks(),
            'paginaAtual' => "Visualizar, editar ou excluir cadastro de cliente",
            'registros' => $this->DAO->SELECT_ALL(),
        ];

        return view("cadastrosVinculados",$variaveis);
    }

    public function excluir(Request $request, int $ID){
        
        $this->DAO->DELETEbyID($ID);
        return redirect()->route("cadastrosVinculados.show");
    }

    public function telaEditar(int $ID){

        $variaveis = [
            'itensMenu' => getMenuLinks(),
            'paginaAtual' => "Visualizar, editar ou excluir cadastro de cliente",
            'registro' => $this->DAO->SELECTbyID($ID)
        ];

        return view("editarCadastro",$variaveis);
    }

    public function telaCadastrar(){

        $variaveis = [
            'itensMenu' => getMenuLinks(),
            'paginaAtual' => "Adicionar cadastro de cliente",
        ];

        return view("cadastro",$variaveis);
    }
}
