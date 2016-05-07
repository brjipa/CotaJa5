@extends('layout')

@section('conteudo')
    <div class="row" id="Principal">
        <div class="col l5 foto">
            Foto
        </div>
        <div class="col l7">
            <h4>{{$produto->nome_produto}}</h4>

            <table class="table striped">
                <thead>
                    <th>
                       Marca
                    </th>
                    <th>
                        Quantidade/Peso
                    </th>
                    <th>
                        Supermercado
                    </th>
                </thead>
                <tbody>
                    <td>
                       Teste
                    </td>
                    <td>
                        1
                    </td>
                    <td>
                        Gonçalves
                    </td>
                </tbody>
            </table>

            <div class="row" style="margin-top: 10px;">
                <div class="col l6">
                    Valor:<h3>R$ 30,00</h3>
                </div>
            </div>
            <div class="row right">
                <a class="waves-effect waves-light btn-large blue darken-4">Adicionar à lista</a>
            </div>
        </div>
    </div>

    <div class="row">
        <h4>Outros Valores</h4>

    </div>
@stop