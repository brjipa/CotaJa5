<?php

namespace App\Http\Controllers;

use App\ProdutoModel;
use App\MarcaModel;
use App\MercadoModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
    public function index()
    {
        $produto = \App\ProdutoModel::all($id);
        return view('produto.detalhe', array('produto' => $produto));

    }

    public function show($id)
    {
        $produto = \App\ProdutoModel::findOrFail($id);
        return view('produto.detalhe', array('produto' => $produto));

        /*$marca = \App\MarcaModel::findOfFail($cod_marca);
        return view('produto.detalhe', array('marca' => $marca));*/

        //$produto = DB::select(’select * from produtos where id = ?’,[$cod_produto]);
        //return view('produto.detalhe')->with('produto', $produto);

    }
}
