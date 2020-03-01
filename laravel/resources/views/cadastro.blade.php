@extends('layouts.templateGeral')

@section('title', 'Cadastro do Cliente')

@section('conteudo')

<form class="col-lg-12 col-12 mx-sm-auto mt-sm-1" method="POST" action="{{route('cadastro.post')}}">
    {{csrf_field()}}
    <fieldset>
        <div class="form-row col-msm">
        <!-- Cadastro Pessoa Fisica -->
        <div class="form-group col-sm-7">
                <span class="col-1 p-0">Razão Social</span>
                <input id="razaoSocial"  class="form-control" type="text" maxlength="40" name="razaoSocial" placeholder="Insira a razão social da empresa" 
                value=""  title="Razão Social" required autofocus>
            </div>

            <div class="form-group col-sm-2">
                <span>CEP</span>
                <input class="form-control" maxlength="9" type="text" name="CEP" placeholder="99999-999" pattern="[0-9]{5}-[0-9]{3}$" 
                value="" required>
            </div>

            <div class="form-group col-sm-3">
                <span>Telefone</span>
                <input class="form-control" maxlength="14" type="text" name="telefone" placeholder="(99)999999999" pattern="\([0-9]{2}\)[0-9]{4,6}[0-9]{3,4}$" 
                value="" required>
            </div>


            <div class="form-group col-sm-8">    
                <span>Nome Fantasia</span>
                <input class="form-control"  type="text" maxlength="40" name="nomeFantasia" title="Nome Fantasia" placeholder="Insira o nome fantasia da empresa"  
                value=""  required>
            </div>
            
            <div class="form-group col-sm-4">
                <span>CNPJ</span>
                <input class="form-control" type="text" maxlength="18" name="CNPJ" placeholder="99.999.999/9999-99" 
                value=""  pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}/[0-9]{4}-[0-9]{2}$" 
                title="Insira o CNPJ. Digite apenas números no formato xx.xxx.xxx/xxxx-xx" required>
            </div> 

            <div class="form-group col-sm-8">
                <span>Site do Cliente</span>
                <input class="form-control"  type="text" maxlength="11" name="site" placeholder="Insira o endereço do site do cliente" 
                value=""  title="Site do Cliente" required>
            </div>

            <div class="form-group col-sm-2">    
                <span>Inscrição Estadual</span>
                <input class="form-control"  type="text" maxlength="9" name="inscricaoEstadual" placeholder="999999-99" pattern="[0-9]{6}-[0-9]{2}$" 
                value="" title="Insira a Inscrição Estadual. Digite apenas números."required>
            </div>

            <div class="form-group col-sm-2">
                <span>Matriz</span>
                <input class="form-control" type="text" name="matriz" maxlength="40" placeholder="Matriz da empresa" 
                value="" title="Matriz da empresa" required>
            </div>

            <div class="form-group col-sm-3">
                <span>Estado</span>    
                <select id="estado" name="estado"  class="custom-select" value=""  required>
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
                value="" required>
            </div>

            <div class="form-group col-sm-4">
                <span>Endereço</span>
                <input class="form-control" maxlength="50" type="text" name="endereco" placeholder="Insira o endereço"
                value="" required>
            </div>

            <div class="form-group col-sm-1">
                <span>Número</span>
                <input class="form-control" maxlength="6" type="text" name="numero" placeholder="Nº"
                value="" required>
            </div>
            
            
        </div>
    
        <div class="input-group-append">
        <button id="submit" type="submit" class="btn btn-primary mr-2">Cadastrar Cliente</button>
            <a href={{route('cadastrosVinculados.show')}}></a><button type="button" class="btn btn-danger">Cancelar</button> </a>
        </div>
    </fieldset>
</form>

@endsection
