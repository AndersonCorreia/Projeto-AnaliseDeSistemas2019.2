@include('layouts._includes.top')
<div class="pt-4">
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
            @if( $loginError )
            <div class="alert alert-danger font-weight-bold text-center" role="alert">
                <span>Credenciais incorretas: usuario não existe ou senha incorreta.</span>
            </div>
            @endif
            
            <!-- E-mail -->
            <div class="form-group">
                <label for="userCadastro">Usuário</label>
                <input class="form-control" placeholder="Insira o nome de usuário" id="userCadastro" name="usuario" type="text" required>
            </div>
            <!-- Senha -->
            <div class="form-group">
                <label for="senha">Senha</label>
                <input minlength="4" maxlength="20" type="password" class="form-control" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block" style="font-size:15px">Entrar</button>
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