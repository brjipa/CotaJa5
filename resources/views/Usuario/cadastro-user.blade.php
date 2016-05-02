@extends('layout')

@section('conteudo')
    <h3>Cadastro de usuário</h3>
    <br>
    <br>
    <form method="post" action="usuario/cadastro-user">
        <div class="row" id="nome usuario">
                <div class="input-field col s6">
                    <input id="nome_usuario" type="text" class="validate">
                    <label for="nome_usuario">Nome</label>
                </div>
                <div class="input-field col s6">
                    <input id="sobrenome_usuario" type="text" class="validate">
                    <label for="sobrenome_usuario">Sobrenome</label>
                </div>
        </div>

        <div class="row" id="senha usuario">
                <div class="input-field col s6">
                    <input id="senha_usuario" type="password" class="validate">
                    <label for="senha_usuario">Senha</label>
                </div>
                <div class="input-field col s6">
                    <input id="senha_usuario" type="password" class="validate">
                    <label for="senha_usuario">Confirme a senha</label>
                </div>
        </div>

        <div class="row" id="email usuario">
                <div class="input-field col s6">
                    <input id="email_usuario" type="text" class="validate">
                    <label for="email_usuario">Email</label>
                </div>
                <div class="input-field col s6">
                    <input id="email_usuario" type="text" class="validate">
                    <label for="email_usuario">Confirme o email</label>
                </div>
        </div>

        <div class="row" id="endereco usuario">
                <div class="input-field col s5">
                    <input id="rua_usuario" type="text" class="validate">
                    <label for="rua_usuario">Rua</label>
                </div>
                <div class="input-field col s1">
                    <input id="num_usuario" type="text" class="validate">
                    <label for="num_usuario">Número</label>
                </div>
                <div class="input-field col s3">
                    <input id="bairro_usuario" type="text" class="validate">
                    <label for="bairro_usuario">Bairro</label>
                </div>
                <div class="input-field col s3">
                    <select id="cidade_usuario">
                        <option value="" disabled selected> Cidade </option>
                        <option value="1"> Ji-Paraná </option>
                        <option value="2"> Ouro Preto </option>
                        <option value="3"> Jarú </option>
                    </select>
                    <label for="cidade_usuario">Cidade</label>
                </div>
        </div>
        <div class="row">
        <button type="submit" class="waves-effect waves-light btn-large blue darken-4 right">Cadastrar</button>
        </div>

    </form>
@stop