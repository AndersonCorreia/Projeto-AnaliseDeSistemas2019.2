@extends('layouts.templateGeral')

@section('title', 'Empresas Cadastradas')

@section('conteudo')

<div class="m-1 p-3">

    <div class="form-group col-12 m-0 p-0">
        <h5>Resumo de Cadastros de Clientes</h5>
    </div>
    @if (($registros ?? false))
    @foreach($registros as $registro)
    <div class= "row mt-3 mx-0 p-1 scorpius-border-shadow border-top border-shadow">
        <div class="row col-12 col-md-11 my-1" >
            <div class="row col-12">
                <div class= "col-8 col-5 col-md-3">
                    <div class="col-12 p-0 my-1 font-weight-bold">Nome Fantasia</div>
                    <div class="col-12 p-0">{{$registro['nomeFantasia']}}</div>
                </div>
                <div class= "col-4 col-md-3">
                    <div class="col-12 p-0 my-1 font-weight-bold">Razão Social</div>
                    <div class="col-12 p-0">{{$registro['razaoSocial']}}</div>
                </div>
                <div class= "col-8 col-md-4">
                    <div class="col-12 p-0 my-1 font-weight-bold">Inscrição Estadual</div>
                    <div class="col-12 p-0">{{$registro['inscricaoEstadual']}}</div>
                </div>
                <div class= "col-4 col-md-2 m-0">
                    <div class="col-12 p-0 my-1 my-md-0 font-weight-bold">CNPJ</div>
                    <div class="col-12 p-0">{{$registro['CNPJ']}}</div>
                </div>
            </div>

            <div class="row col-12">
                <div class= "col-8 col-5 col-md-3">
                    <div class="col-12 p-0 my-1 font-weight-bold">Endereço</div>
                    <div class="col-12 p-0">{{$registro['endereco']}}</div>
                </div>
                <div class= "col-4 col-md-3">
                    <div class="col-12 p-0 my-1 font-weight-bold">Cidade</div>
                    <div class="col-12 p-0">{{$registro['cidade']}}</div>
                </div>
                <div class= "col-8 col-md-4">
                    <div class="col-12 p-0 my-1 my-md-0 font-weight-bold">Estado</div>
                    <div class="col-12 p-0">{{$registro['estado']}}</div>
                </div>
                <div class= "col-4 col-md-2 m-0">
                    <div class="col-12 p-0 my-1 font-weight-bold">Número</div>
                    <div class="col-12 p-0">{{$registro['numero']}}</div>
                </div>
            </div>
 

            <div class="row col-12">
                <div class= "col-8 col-5 col-md-3">
                    <div class="col-12 p-0 my-1 font-weight-bold">CEP</div>
                    <div class="col-12 p-0">{{$registro['CEP']}}</div>
                </div>
                <div class= "col-4 col-md-3">
                    <div class="col-12 p-0 my-1 font-weight-bold">Matriz</div>
                    <div class="col-12 p-0">{{$registro['matriz']}}</div>
                </div>
                <div class= "col-8 col-md-4">
                    <div class="col-12 p-0 my-1 font-weight-bold">Telefone</div>
                    <div class="col-12 p-0">{{$registro['telefone']}}</div>
                </div>
                <div class= "col-4 col-md-2 m-0">
                    <div class="col-12 p-0 my-1 my-md-0 font-weight-bold">Site</div>
                    <div class="col-12 p-0">{{$registro['site']}}</div>
                </div>
            </div>


        </div>
        <div class="col-11 col-md-1 mx-0 pt-5 p-0 text-right">
            <a class="btn col-3 col-md-12 btn-primary btn-sm p-1" href="{{route('editarCadastro.show', $registro['ID'])}}">Atualizar</a>
            <a class="btn col-3 col-md-12 btn-danger btn-sm p-1" href="{{route('excluirCadastro.post', $registro['ID'])}}">Deletar</a>
        </div>
    </div>
    @endforeach
    @else
    <div class="alert alert-info" role="alert">
        <p>Nenhum cliente cadastrado no sistema.
           <br>
           <a  href="{{route('cadastro.show')}}"  class="alert-link">CADASTRE UM AQUI</a>
        </p>
    </div>
    @endif
</div>

<style>

    .box-actions{
        margin:0px 0px 0px 400px;
    }
    .btn-a{
        font-weight: bold;
	    padding: 10px;
	    float: left;
	    border: 1px;
	    border-color: black;
	    color: black;
        background-color: #1B5E20;
	    margin-left: 20px;
    }
    .btn-d{
        font-weight: bold;
	    padding: 10px;
	    float: left;
	    border: 1px;
	    border-color: black;
	    color: black;
        background-color: #FF9800;
	    margin-left: 20px;
    }

    .instituicoes{
        widdiv class= "col": 920px;
        height: 100px;
        border: solid 5px black;
        padding: 12px;
        margin: 10px;
        display: flex;
        flex-direction:column;
        align-items: center;
        
    }

    .instBotoes{
        align-items: center;
        display: flex;
        flex-direction: row;
    }
    
    .botoes{
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .btn{
        padding: 10px; 
        margin: 5px;
    }

    h2{
        align-items: center;
    }

    div, div class= "col"{
        padding: 0px 50px 0px 20px;
    }
   

</style>
@endsection
