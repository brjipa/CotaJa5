<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="/css/materialize.css" rel="stylesheet">
    <link href="/css/css.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>CotaJá</title>
</head>
<body>
    <div class="container-fluid yellow" style="height: 401px">
        <div class="container" id="topo" style="padding-top: 30px;">

            <div class="row">
                <div id="logo" class="left-align col l4" style="margin-top: 50px;"><img src="/img/LOGO.png"> </div>

                <div id="menu" class="right-align col l8">
                    <a class="navbar-link" href="/">Home</a>
                    <a class="navbar-link" href="/register">Cadastre-se</a>
                    <a class="navbar-link" href="/contato">Contato</a>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <a class="navbar-link" href="/login">Login</a>
                    @else

                        <a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a>
                        <ul id="dropdown1" class="dropdown-content" style="width: 140px; position: absolute; top: 0px; left: 420.875px; opacity: 1; display: none;">
                            <li><a href="/home">Painel</a></li>
                            <li><a href="/logout">Sair</a></li>
                        </ul>
                    @endif

                    <br>
                    <br>
                    <div id="pesquisa">
                        <nav>
                            <div class="nav-wrapper">
                                <form>
                                    <div class="input-field">
                                        <input id="search" type="search" required>
                                        <label for="search"><img id="lupa" src="/img/search.png" style="height: 20px"></label>
                                        <i class="material-icons">X</i>
                                    </div>
                                </form>
                            </div>
                        </nav>
                    </div>
            </div>
            </div>


        <div class="row">
            <nav class="btncat">
                <div class="btncat">
                    <ul class="center">
                        <li><a href="#"> <img class="imgcat" src="/img/padaria.png"> <span>Padaria</span> </a> </li>
                        <li><a href="#"> <img class="imgcat" src="/img/carnes.png"> <span>Carnes</span> </a> </li>
                        <li><a href="#"> <img class="imgcat" src="/img/frios.png"> <span>Frios, Leites e Derivados</span> </a> </li>
                        <li><a href="#"> <img class="imgcat" src="/img/frutas.png"> <span>Frutas, Ovos e Verduras</span> </a> </li>
                        <li><a href="#"> <img class="imgcat" src="/img/congelados.png"> <span>Comidas prontas e Congeladas</span> </a> </li>
                        <li><a href="#"> <img class="imgcat" src="/img/bebidas.png"> <span>Bebidas</span> </a> </li>
                        <li><a href="#"> <img class="imgcat" src="/img/higiene.png"> <span>Higiene Pessoal</span> </a> </li>
                        <li><a href="#"> <img class="imgcat" src="/img/saude.png"> <span>Saúde e Beleza</span> </a> </li>
                        <li><a href="#"> <img class="imgcat" src="/img/limpeza.png"> <span>Bazar e Limpeza</span> </a> </li>
                    </ul>
                </div>
            </nav>
        </div>
        </div>
    </div>

<div class="container conteudo">
    @yield('conteudo')
</div>

<footer>
    <div class="row blue darken-3 rodape">
       <div class="row">
        <div class="container">
            <div class="col l3">
                logo
            </div>
            <div class="col l6">
                menus
            </div>
            <div class="col l3 right-align">
                social
            </div>
        </div>
       </div>
        <div class="center-align white-text">
            copyright &copy <?php echo date("Y"); ?>
        </div>
    </div>
</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="\js\materialize.min.js"></script>

</body>
</html>