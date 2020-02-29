@include('layouts._includes.top')

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
        <label for="userCadastro">Usuario</label>
        <input class="form-control" placeholder="exemplo" id="userCadastro" name="usuario" type="text" required>
    </div>
    <!-- Senha -->
    <div class="form-group">
        <label for="senha">Senha</label>
        <input minlength="4" maxlength="20" type="password" class="form-control" id="senha" name="senha" required>
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block" style="font-size:15px">Entrar</button>
</form>

@include('layouts._includes.footer')