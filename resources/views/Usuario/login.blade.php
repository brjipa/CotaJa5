@extends('layout')

@section('conteudo')

    <div class="row">
        <div class="col l6">
            <h3>Login</h3>
            <form>
                <div class="row" id="nome usuario">
                    <div class="input-field col s6">
                        <input id="email_usuario" type="text" class="validate">
                        <label for="email_usuario">E-mail</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="senha_usuario" type="text" class="validate">
                        <label for="senha_usuario">Senha</label>
                    </div>
                </div>

                <div class="row">
                    <a class="waves-effect waves-light btn-large blue darken-4 right">Login</a>
                </div>
            </form>
        </div>

        <div class="cl l6">
            <h4>Não possui uma conta? Cadastre-se</h4>
            <br>
            <br>
            <br>
            <br>

            <a class="waves-effect waves-light btn-large blue darken-4 right" href="/cadastro">Cadastrar</a>
        </div>
    </div>
@stop