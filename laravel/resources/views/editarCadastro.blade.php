@extends('layouts.templateGeral')

@section('title', 'Editar ou Excluir Cadastro do Cliente')

@section('conteudo')

<div class="form-group col-12 pt-3">
<h4>Dados da Empresa</h4>
</div>

<div>
<form class="col-xl-12 col-12 mx-sm-auto mt-sm-1" action={{route("editarCadastro.post")}} method="POST" enctype="multipart/form-data">
{{csrf_field()}}
    <fieldset>
        <div class="form-row col-msm">   
            <div class="form-group col-sm-7">
                <span class="col-1 p-0">Razão Social</span>
                <input id="nomeInst"  class="form-control" type="text" maxlength="40" name="razaoSocial" placeholder="Insira a razão social da empresa" 
                value="{{isset($registro['razaoSocial']) ? $registro['razaoSocial'] : ''}}" title="Razão Social" required autofocus>
            </div>

            <div class="form-group col-sm-2">
                <span>CEP</span>
                <input class="form-control" maxlength="9" type="text" name="CEP" placeholder="99999-999" pattern="[0-9]{5}-[0-9]{3}$" 
                value="{{isset($registro['CEP']) ? $registro['CEP'] : ''}}" required>
            </div>

            <div class="form-group col-sm-3">
                <span>Telefone</span>
                <input class="form-control" maxlength="14" type="text" name="telefone" placeholder="(99)99999-9999" pattern="\([0-9]{2}\)[0-9]{4,6}[0-9]{3,4}$"
                value="{{isset($registro['telefone']) ? $registro['telefone'] : ''}}" required>
            </div>


            <div class="form-group col-sm-8">    
                <span>Nome Fantasia</span>
                <input class="form-control"  type="text" maxlength="40" name="nomeFantasia" title="Nome Fantasia" placeholder="Insira o nome fantasia da empresa"  
                value="{{isset($registro['nomeFantasia']) ? $registro['nomeFantasia'] : ''}}" required>
            </div>
            
            <div class="form-group col-sm-4">
                <span>CNPJ</span>
                <input class="form-control" type="text" maxlength="18" name="CNPJ" placeholder="99.999.999/9999-99" 
                value="{{isset($registro['CNPJ']) ? $registro['CNPJ'] : ''}}" pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}/[0-9]{4}-[0-9]{2}$" 
                title="Insira o CNPJ. Digite apenas números" required>
            </div> 

            <div class="form-group col-sm-8">
                <span>Site do Cliente</span>
                <input class="form-control"  type="text" maxlength="50" name="site" placeholder="Insira o endereço do site do cliente" 
                value="{{isset($registro['site']) ? $registro['site'] : ''}}" title="Site do Cliente" required>
            </div>

            <div class="form-group col-sm-2">    
                <span>Inscrição Estadual</span>
                <input class="form-control"  type="text" maxlength="9" name="inscricaoEstadual" placeholder="999999-99" pattern="[0-9]{6}-[0-9]{2}$" 
                value="{{isset($registro['inscricaoEstadual']) ? $registro['inscricaoEstadual'] : ''}}" title="Insira a Inscrição Estadual. Digite apenas números."required>
            </div>

            <div class="form-group col-sm-2">
                <span>Matriz</span>
                <input class="form-control" type="text" name="matriz" maxlength="40" placeholder="Matriz" 
                value="{{isset($registro['matriz']) ? $registro['matriz'] : ''}}" title="Matriz da empresa" required>
            </div>

            <div class="form-group col-sm-3">
                <span>Estado</span>    
                <select id="estado" name="estado"  class="custom-select" value="{{isset($registro['estado']) ? $registro['estado'] : 'AL'}}" required>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                </select>
            </div>

            <div class="form-group col-sm-4">
                <span>Cidade</span>
                <input class="form-control"  maxlength="40" type="text" name="cidade" placeholder="Insira a cidade"
                value="{{isset($registro['cidade']) ? $registro['cidade'] : ''}}" required>
            </div>

            <div class="form-group col-sm-4">
                <span>Endereço</span>
                <input class="form-control" maxlength="50" type="text" name="endereco" placeholder="Insira o endereço"
                value="{{isset($registro['endereco']) ? $registro['endereco'] : ''}}" required>
            </div>

            <div class="form-group col-sm-1">
                <span>Número</span>
                <input class="form-control" maxlength="6" type="text" name="numero" placeholder="Nº"
                value="{{isset($registro['numero']) ? $registro['numero'] : ''}}" required>
            </div>
            
            <input type="hidden" value="{{ $registro['ID'] ?? '99' }}">
        </div>
    </fieldset>
        <div class="input-group-append">
            <a href={{route("editarCadastro.post")}}><button type="submit" class="btn btn-success mr-2">Atualizar Dados</button></a>
            <a href={{route("excluirCadastro.post",  ($registro['ID'] ?? '99')) }}><button type="button" class="btn btn-danger">Excluir Cadastro</button> </a>
            <a href={{route("cadastrosVinculados.show")}}><button type="button" class="btn btn-primary mx-2">Cancelar</button> </a>
        </div>
    </form>
</div>
@endsection

@section('css')
<style type="text/css">
    form .form-group{
        padding:0.5%;
    }
    form span{
        color: black;
        text-decoration: none;   
    }
</style>


@endsection
