@extends('layouts.templateGeral')

@section('title', 'Agendamento')

@section('conteudo')

<form class="col-lg-12 col-12 mx-sm-auto mt-sm-1" method="POST" action="{{route('cadastro.post')}}">
    {{csrf_field()}}
    <fieldset>
        <div class="form-row col-12">
        <!-- Cadastro Pessoa Fisica -->
            <div class="form-group col-sm-4">    
                <span>Primeiro Nome</span>
                <input id="primeiroNomeCF" class="form-control"  type="text" maxlength="20" name="primeiroNomeCF" value="" 
                placeholder="Primeiro nome do cliente" pattern="[a-zA-ZÀ-Úà-ú ]+$$" title="Infome apenas letras" required>
            </div>
            <div class="form-group col-sm-4">    
                <span>Sobrenome</span>
                <input id="segundoNomeCF" class="form-control"  type="text" maxlength="40" name="segundoNomeCF" value="" 
                placeholder="Segundo nome do cliente" pattern="[a-zA-ZÀ-Úà-ú ]+$$" title="Infome apenas letras" required>
            </div>
            <div class="form-group col-sm-4">
                <label for="cpfCadastro">CPF</label>
                <input aria-describedby="cpfHelp" name="cpf" id="cpfCadastro" placeholder="00000000000" type="text" minlength="11" inputmode="number"
                    maxlength="11" class="form-control" required pattern="[0-9]{11}" title="Informe apenas os numeros do CPF sem '.' e sem '-'.">
                @if($ERRO == 'CPF')
                <small id="cpfHelp" class="form-text text-danger">{{$MSG_ERRO}}</small>
                @endif
            </div>
            <div class="form-group col-sm-4">    
                <span>Nome Fantasia</span>
                <input id="nomeFantasia" class="form-control"  type="text" maxlength="40" name="nomeFantasia" value="" 
                placeholder="Nome Fantasia" pattern="[a-zA-ZÀ-Úà-ú ]+$$" title="Infome apenas letras" required>
            </div>
            <div class="form-group col-sm-4">    
                <span>Site</span>
                <input id="site" class="form-control"  type="text" maxlength="40" name="site" value="" 
                placeholder="Site do cliente" pattern="[a-zA-ZÀ-Úà-ú ]+$$" title="Infome apenas letras" required>
            </div>
            <div class="form-group col-sm-4">    
                <span>Inscrição Estadual</span>
                <input id="inscricaoEst" class="form-control"  type="text" maxlength="20" name="inscricaoEstadual" value="" 
                placeholder="Inscricao Estadual" pattern="[0-9]{11}" title="Infome apenas numeros" required>
            </div>
            <div class="form-group col-sm-4">    
                <span>Data de nascimento</span>
                <input type="date" name="dataNascimento" id="dataN" required>
            </div>
            <div class="form-group col-sm-4">    
                <span>Sexo</span>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="feminino" name="sexoF" class="custom-control-input">
                    <label class="custom-control-label" for="sexoF">Feminino</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sexoM" name="sexoM" class="custom-control-input">
                    <label class="custom-control-label" for="sexoM">Masculino</label>
                </div>
            </div>
            <div class="form-group col-sm-4">    
                <span>Estado</span>
                <input type="text" name="cidade" id="cidade" required>
            </div>
            <div class="form-group col-sm-4">
                <span>Cidade</span>
                <input id="cidade" class="form-control"  type="text" name="Cidade" required>
            </div>
            <div class="form-group col-sm-6">
                <span>Endereço</span>
                <input id="endereco" class="form-control"  type="text" maxlength="50" name="Endereco" 
                placeholder="Rua e Bairro" required>
            </div>
            <div class="form-group col-sm-2 col-4">    
                <span>Número</span>
                <input id="numero" class="form-control" type="text" name="Numero" maxlength="5" placeholder="xxx" required>
            </div>
        </div>
    </fieldset>
</form>

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
<script>
function verificacao() {
    var cpf = document.getElementById("cpfCadastro")
    cpf.style.backgroundColor = 'white'
    if (cpf.value == "") {
        alert("Insira um cpf!")
        cpf.style.backgroundColor = 'Salmon'
        return
    }
}
</script>
@endsection