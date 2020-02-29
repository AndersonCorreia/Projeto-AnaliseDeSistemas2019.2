@extends('layouts.templateGeral')

@section('title', 'Agendamento')

@section('conteudo')

<form class="col-lg-12 col-12 mx-sm-auto mt-sm-1" method="POST" action="{{route('cadastro.post')}}">
    {{csrf_field()}}
    <fieldset>
        <div class="form-row col-12">
        <!-- Cadastro Pessoa Fisica -->
            <div class="form-group col-sm-6">    
                <span>Razão Social</span>
                <input id="razaoSocial" class="form-control"  type="text" maxlength="40" name="razaoSocial" value="" 
                placeholder="" pattern="[a-zA-ZÀ-Úà-ú ]+$$" title="Infome apenas letras" required>
            </div>
            <div class="form-group col-sm-6">    
                <span>Nome Fantasia</span>
                <input id="nomeFantasia" class="form-control"  type="text" maxlength="40" name="nomeFantasia" value="" 
                placeholder="" pattern="[a-zA-ZÀ-Úà-ú ]+$$" title="Infome apenas letras" required>
            </div>
            <div class="form-group col-sm-4">
                <label for="cpfCadastro">CNPJ</label>
                <input name="CNPJ" id="CNPJ" placeholder="00000000000" type="text" minlength="14" inputmode="number"
                    maxlength="14" class="form-control" required pattern="[0-9]{11}" title="Informe apenas os numeros do CNPJ sem '.' e sem '-'.">
            </div>
            <div class="form-group col-sm-4">    
                <span>Site</span>
                <input id="site" class="form-control"  type="text" maxlength="40" name="site" value="" 
                placeholder="Site do cliente" pattern="[a-zA-ZÀ-Úà-ú ]+$$" title="Infome apenas letras" required>
            </div>
            <div class="form-group col-sm-4">    
                <span>Inscrição Estadual</span>
                <input id="inscricaoEst" class="form-control"  type="text" maxlength="20" name="inscricaoEstadual" value="" 
                placeholder="Inscrição Estadual" pattern="[0-9]{11}" title="Infome apenas numeros" required>
            </div>
            <div class="form-group col-sm-4">    
                <span>Matriz</span>
                <input id="matriz" class="form-control"  type="text" maxlength="40" name="matriz" value="" 
                placeholder="" pattern="[a-zA-ZÀ-Úà-ú ]+$$" title="Infome apenas letras" required>
            </div>
            <div class="form-group col-sm-4">    
                <span>Estado</span>
                <input type="text" name="cidade" id="cidade" required>
            </div>
            <div class="form-group col-sm-4">
                <span>Cidade</span>
                <input id="cidade" class="form-control"  type="text" name="cidade" pattern="[a-zA-ZÀ-Úà-ú ]+$$" required>
            </div>
            <div class="form-group col-sm-8">
                <span>Endereço</span>
                <input id="endereco" class="form-control"  type="text" maxlength="50" name="endereco" 
                placeholder="Rua e Bairro" required>
            </div>
            <div class="form-group col-sm-2 col-4">    
                <span>Número</span>
                <input id="numero" class="form-control" type="text" name="numero" maxlength="5" placeholder="xxx" required>
            </div>
        </div>
    </fieldset>
</form>

@endsection