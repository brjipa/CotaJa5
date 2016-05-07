<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProdutoController extends Controller
{
    public function show( $id)
    {
        $produto = ProdutoModel::findOrFail($id);
        return view('Produto.detalhe', array('produto' => $produto));
        

    }
}
