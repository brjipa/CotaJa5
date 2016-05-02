@extends('layout')

@section('conteudo')
    <h3>Mande sua opinião, sugestão, reclamação</h3>

    <form>
        <div class="row" id="nome usuario">
            <div class="input-field col s6">
                <input id="nome_usuario" type="text" class="validate">
                <label for="nome_usuario">Nome</label>
            </div>
            <div class="input-field col s6">
                <input id="email_usuario" type="text" class="validate">
                <label for="email_usuario">E-mail</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Escreva aqui</label>
            </div>
        </div>

        <div class="row">
            <a class="waves-effect waves-light btn-large blue darken-4 right">Enviar</a>
        </div>
    </form>
@stop