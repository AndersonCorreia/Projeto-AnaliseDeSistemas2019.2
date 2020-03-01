@include('layouts._includes.top')
@section('title', 'Entrar')

<div id="login">
    <div class="side-left">
        <div class="img-figure">
            <img id="img-background-1" src="{{ asset('img\atendimento.jpg') }}">
        </div>
    </div>
    <div class="side-right">
        <div class="text-center mx-auto col-md-10">
            <h1>Entre</h1>
        </div>
        <br>
        <form class="form-group mx-auto col-md-10" action={{ route("login") }} method="POST">
            {{csrf_field()}}
            <!-- E-mail -->
            <div class="form-group">
                <label for="emailCadastro">E-mail ou CPF</label>
                <input class="form-control" placeholder="exemplo@exemplo.com" id="emailCadastro" name="e-mail" type="text"
                    aria-describedby="emailHelp" required>
            </div>
            <!-- Senha -->
            <div class="form-group">
                <label for="senha">Senha</label>
                <input minlength="4" maxlength="8" type="password" class="form-control" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn btn-success btn-lg btn-block" style="font-size:15px">Entrar</button>
            <h1></h1>
            <h6 class="float-right">
                Esqueceu a sua senha? <a target="_blank" href="">Ajuda</a>.
            </h6>
        </form>
    </div>
</div>

@section('css')
<style type="text/css">
    form .form-group{
        padding:0.5%;
    }
    form span{
        color: black;
        text-decoration: none;   
    }
    .side-left{
    float:left;
    width: 50%;
    }
    .side-right{
    float:right;
    width: 50%;
    position: relative;
    }
    .img-figure{
    height: 100vh;
    }

</style>

@include('layouts._includes.footer')