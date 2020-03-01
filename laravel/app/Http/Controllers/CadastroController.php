<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DB\EmpresaDAO;

require_once __DIR__."/../../../resources/views/util/layoutUtil.php";

class CadastroController extends Controller{   
    
    private $DAO;

    public function Construct(){
        parent:: Construct();
        $DAO = new EmpresaDAO();
    }

    public function criar(){

        $DAO->INSERT($request->input() );
        return redirect()->route("editarCadastro.show");
    }

    public function editar(){

        $DAO->UPDATE($request->input() );
        return redirect()->route("editarCadastro.show");
    }

    public function cadastrosVinculados(){

        $DAO->UPDATE($request->input() );
        return redirect()->route("cadastrosVinculados.show");
    }

    public function telaCadastrosVinculados(){

        $variaveis = [
            'itensMenu' => getMenuLinks(),
            'paginaAtual' => "Cadastros Vinculados",
            
        ];

        return view("cadastrosVinculados",$variaveis);
    }
    
    public function listarCadastros(){
        $registros = (new EmpresaDAO())->SELECT_ALL();
        return view("cadastrosVinculados")->with('registros', $registros);
    }

    public function excluir(Request $request, int $ID){
        
        $DAO->DELETEbyID($ID);
        return redirect()->route("editarCadastro.show");
    }

    public function telaEditar(){

        $variaveis = [
            'itensMenu' => getMenuLinks(),
            'paginaAtual' => "Editar ou excluir cadastro de cliente",
            //'empresas' => $DAO->SELECT_ALL()
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
