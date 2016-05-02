@extends('layout')

@section('conteudo')
        <h1>Olá, Bruno</h1>
        <h4>Aqui estão suas ultimas compras</h4>

            <table>
                <tr>
                    <td>
                        <span>Data</span>
                        <h4>30/04/2016</h4>
                    </td>
                    <td>
                        <span>Valor Total</span>
                        <h4>R$ 30,00</h4>
                    </td>
                    <td class="right-align">
                        <a class="waves-effect waves-light btn-large blue darken-4"><img class="btn-painel" src="/img/search-white.png"/> </a>
                        <a class="waves-effect waves-light btn-large blue darken-4"><img class="btn-painel" src="/img/paper.png"/> </a>
                        <a class="waves-effect waves-light btn-large blue darken-4"><img class="btn-painel" src="/img/interface.png"/> </a>
                        <a class="waves-effect waves-light btn-large blue darken-4"><img class="btn-painel" src="/img/delete.png"/> </a>
                    </td>
                </tr>
            </table>
@stop