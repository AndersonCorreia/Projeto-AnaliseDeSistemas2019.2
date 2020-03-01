@include('layouts._includes.top')

<div class= "tela  bg-light">
    <div id="menuLateral" class= " border-right border-info">
        <img id="logo" class = "px-md-3 px-2 pt-3 mb-3" src="{{ public_path('img\capamenu.jpg') }}">
        <div class="h-75 overflow-auto">
            <nav class="p-lg-2 pr-1 py-5 my-5 navbar-left flex-column">
                @foreach ($itensMenu as $key => $item){{--Para adicionar os itens do menu dinamicamente --}}
                    {{--A unica utilidade em manter esse foreach seria esse if da pagina atual--}}
                    @if ($item['texto']==($paginaAtual ?? 'Inicio')){{--Para destacar a pagina atual no menu --}}
                        <a class="nav-link bg-info m-1 rounded active" href="{{$item['link']}}">{{$item['texto']}}</a>
                    @else
                        <a class="nav-link m-1 rounded" href="{{$item['link']}}">{{$item['texto']}}</a>
                    @endif
                @endforeach
            </nav>
        </div>
    </div>
    <div class="content bg-light">
        <div id="menuTopo" class="d-flex m-0 pt-2 w-100 h-auto border-bottom">
                <ul class="w-100">
                    <li id="menuTopoTitle" class="ml-4 pt-1 pb-0 my-0 float-left">
                        <h3>@yield('title', $paginaAtual ?? 'Gerenciar Clientes')</h3>
                    </li>
                    <li class="mr-3 row float-right text-center w-auto font-weight-bold">
                        <div class="col-7 m-0 mr-3 p-0 pt-2 text-center">
                            <span class="ml-1"> Administrador </span>
                        </div>
                        <a href={{route("logout")}} title="Sair">
                            <img alt="exit-icon" class="rounded-lg m-0 p-0" width=40vw src="{{ asset("img/exit-img.jpg")}}">
                        </a>   
                    </li>
                </ul>
        </div>
        <hr class="m-0 bg-primary">
        <div class="p-lg-4 pt-4 container">
            @yield('conteudo')
        </div>
    </div>
</div>

@yield('css')
<style type="text/css">
    html,
    body,
    .tela{
        margin: 0%;
        padding: 0%;
        height: 100vh;
    }

    nav a {
        color: ghostwhite;
    }
    #menuLateral {
        background-color: #3578E5;
    }
    #menuLateral nav a:hover ,#menuLateral nav a:focus{
        color: royalblue;
        background-color: azure;
    }
    hr {
        height: 0.1vh;
    }

    #menuTopo {
        background-color: white;
    }
    #menuTopo ul {
        margin: 0;
        padding:0;
        list-style: none;
    }

    #menuTopo ul li a {
        margin: 0;
        padding: 0;
        display: inline-block;
        color: black;
        text-decoration: none;
    }

    #menuTopo ul li a:hover {
        color: #767474;
    }

    @media (min-width: 651px) {
        .content {
            width: 83%;
            float: right;
        }

        #menuLateral {
            width: 17%;
            height: 100vh;
            float: left;
            position: fixed;
        }
    }
    
    html ::-webkit-scrollbar {
        width: 0.5vw;
    }

    /* aqui é para personalizar o fundo da barra*/
    html ::-webkit-scrollbar-track {
        background: rgb(255, 255, 255);
        border-radius: 20px;
    }

    /* aqui é a alça da barra, que demonstra a altura que você está na página
estou colocando uma cor azul clara nela*/
    html ::-webkit-scrollbar-thumb {
        border-radius: 20px;
        background: rgb(180, 180, 200);
    }

    @media (max-width: 650px) {
        #logo {
            height: 30%;
            width: 30%;
            margin-left: 35%;
            margin-right: 35%;
        }

        #menuLateral {
            height: auto;
        }
    }

    @media (min-width: 651px) and (max-width: 850px) {
        .content {
            width: 81%;
        }

        #menuLateral {
            min-width: 8rem;
            /*tamanho minimo para não oculta palavras*/
            width: 19%;
        }
    }

    @media (min-width: 851px) and (max-width: 950px) {

        /*para alteração mais suave do tamanho do menu*/
        .content {
            width: 82%;
        }

        #menuLateral {
            width: 18%;
        }
    }
    #menuLateral ::-webkit-scrollbar{
        width: 0.3vw;
    }

    /* aqui é para personalizar o fundo da barra*/
    #menuLateral ::-webkit-scrollbar-track{
        background: rgba(250, 250, 250, 0.3);
        border-radius: 20px;
    }

    /* aqui é a alça da barra, que demonstra a altura que você está na página
estou colocando uma cor azul clara nela*/
    #menuLateral ::-webkit-scrollbar-thumb{
        border-radius: 20px;
        background: royalblue;
    }
</style>
@include('layouts._includes.footer')