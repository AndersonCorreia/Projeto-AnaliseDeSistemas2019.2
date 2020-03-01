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

    public function criar(){

        $this->DAO->INSERT($request->input() );
        return redirect()->route("editarCadastro.show");
    }

    public function editar(){

        $this->DAO->UPDATE($request->input() );
        return redirect()->route("editarCadastro.show");
    }

    public function cadastrosVinculados(){

        $this->DAO->UPDATE($request->input() );
        return redirect()->route("cadastrosVinculados.show");
    }

    public function telaCadastrosVinculados(){

        $variaveis = [
            'itensMenu' => getMenuLinks(),
            'paginaAtual' => "Editar ou excluir cadastro de cliente",
            'registros' => $this->DAO->SELECT_ALL(),
        ];

        return view("cadastrosVinculados",$variaveis);
    }

    public function excluir(Request $request, int $ID){
        
        $this->DAO->DELETEbyID($ID);
        return redirect()->route("editarCadastro.show");
    }

    public function telaEditar(int $ID){

        $variaveis = [
            'itensMenu' => getMenuLinks(),
            'paginaAtual' => "Editar ou excluir cadastro de cliente",
            'registro' => $this->DAO->SELECTbyID($ID)
        ];

        return view("editarCadastro",$variaveis);
    }

    public function telaCadastrar(){

        $variaveis = [
            'itensMenu' => getMenuLinks(),
            'paginaAtual' => "Cadastrar Cliente",
        ];

        return view("cadastro",$variaveis);
    }
}
