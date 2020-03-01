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


    public function editarCadastro(Request $req, $id) {
        $DAO = new ClienteDAO();
        $razaoSocial = $_POST['razaoSocial'];
        $nomeFantasia = $_POST['nomeFantasia'];
        $cnpj = $_POST['CNPJ'];
        $site = $_POST['site'];
        $inscricaoEstadual = $_POST['inscricaoEstadual'];
        $matriz = $_POST['mamtriz'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
  
        //armazena na classe da Model
        $cliente = new Cliente( 
            $razaoSocial,
            $nomeFantasia,
            $cnpj,
            $site,
            $inscricaoEstadual,
            $matriz,
            $estado,
            $cidade,
            $endereco,
            $numero
        );       
        //altera no banco
        $DAO->UPDATE($cliente);
        return redirect()->route('cadastro.show');
    
    }



}
