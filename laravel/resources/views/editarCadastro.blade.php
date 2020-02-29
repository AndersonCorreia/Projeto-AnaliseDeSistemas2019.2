@extends('layouts.templateGeral')

@section('title', 'Editar ou Excluir Cadastro do Cliente')

@section('conteudo')

<div class="form-group col-12 pt-3">
<h4>Dados da Empresa</h4>
</div>

<div>
<form class="col-xl-12 col-12 mx-sm-auto mt-sm-1" action="" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
    <fieldset>
        <div class="form-row col-msm">   
            <div class="form-group col-sm-12">
                <span class="col-1 p-0">Razão Social</span>
                <input type="hidden" name="_method" value="put">
                <input id="nomeInst"  class="form-control" type="text" maxlength="40" name="razaoSocial" placeholder="Insira a razão social da empresa" 
                value="{{isset($registros['razaoSocial']) ? $registros['razaoSocial'] : ''}}" title="Razão Social" required autofocus>
            </div>

            <div class="form-group col-sm-8">    
                <span>Nome Fantasia</span>
                <input class="form-control"  type="text" maxlength="40" name="nomeFantasia" title="Nome Fantasia" placeholder="Insira o nome fantasia da empresa"  
                value="{{isset($registros['nomeFantasia']) ? $registros['nomeFantasia'] : ''}}" required>
            </div>
            
            <div class="form-group col-sm-4">
                <span>CNPJ</span>
                <input class="form-control" type="text" maxlength="18" name="CNPJ" placeholder="99.999.999/9999-99" 
                value="{{isset($registros['cnpj']) ? $registros['cnpj'] : ''}}" pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}/[0-9]{4}-[0-9]{2}$" 
                title="Insira o CNPJ. Digite apenas números" required>
            </div> 

            <div class="form-group col-sm-8">
                <span>Site do Cliente</span>
                <input class="form-control"  type="text" maxlength="11" name="site" placeholder="Insira o endereço do site do cliente" 
                value="{{isset($registros['site']) ? $registros['site'] : ''}}" title="Site do Cliente" required>
            </div>

            <div class="form-group col-sm-2">    
                <span>Inscrição Estadual</span>
                <input class="form-control"  type="text" maxlength="9" name="inscricaoEstadual" placeholder="999999-99" pattern="[0-9]{6}-[0-9]{2}$" 
                value="{{isset($registros['inscricaoEstadual']) ? $registros['inscricaoEstadual'] : ''}}" title="Insira a Inscrição Estadual. Digite apenas números."required>
            </div>

            <div class="form-group col-sm-2">
                <span>Matriz</span>
                <input class="form-control" type="text" name="matriz" maxlength="40" placeholder="Matriz" 
                value="{{isset($registros['matriz']) ? $registros['matriz'] : ''}}" title="Matriz da empresa" required>
            </div>

            <div class="form-group col-sm-3">
                <span>Estado</span>
                <input class="form-control"  type="text" name="estado" placeholder="Insira o estado"
                value="{{isset($registros['estado']) ? $registros['estado'] : ''}}" required>
            </div>

            <div class="form-group col-sm-4">
                <span>Cidade</span>
                <input class="form-control"  type="text" name="Cidade" placeholder="Insira a cidade"
                value="{{isset($registros['cidade']) ? $registros['cidade'] : ''}}" required>
            </div>

            <div class="form-group col-sm-4">
                <span>Endereço</span>
                <input class="form-control"  type="text" name="Endereço" placeholder="Insira o endereço"
                value="{{isset($registros['endereco']) ? $registros['endereco'] : ''}}" required>
            </div>

            <div class="form-group col-sm-1">
                <span>Número</span>
                <input class="form-control"  type="text" name="Número" placeholder="Nº"
                value="{{isset($registros['numero']) ? $registros['numero'] : ''}}" required>
            </div>
            <?php
                #
                # Função que ajuda a desenhar o controle HTML select
                #
                function combobox($arrDados, $valorSelecionado = null) {
                    foreach ($arrDados as $key => $value) {
                        $selected = ($valorSelecionado == $key) ? "selected=\"selected\"" : null;
                        echo "<option value=\"$key\" $selected >$value</option>";
                    }
                }

                #
                # Array com os dados de nossa combo
                #
                $estado = array(
                    "BA" => "Bahia",
                    "MA" => "Maranhão",
                    "PI" => "Piauí",
                    "CE" => "Ceará",
                    "RN" => "Rio Grande do Norte",
                    "PB" => "Paraíba",
                    "PE" => "Pernambuco",
                    "AL" => "Alagoas",
                    "SE" => "Sergipe" 
                );

              // $valor_selecionado_estado = $registros['UF'];
                //dd($valor_selecionado);

                ?>

            <!-- <div class="form-group col-sm-3">
                
                <span>Estado</span>    
                
                <select id="estado" name="Estado"  class="custom-select" required>
                    <? // php combobox($estado, $valor_selecionado_estado); ?>
                </select>
            </div> -->
            
        </div>
    </fieldset>
        <div class="input-group-append">
            <button type="submit" class="btn btn-success mr-2">Atualizar Dados</button>
            <a href={{route("cadastro.show")}}><button type="button" class="btn btn-danger">Excluir Cadastro</button> </a>
            <a href={{route("cadastro.show")}}><button type="button" class="btn btn-primary mx-2">Cancelar</button> </a>
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