<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProdutoController extends Controller
{
    public function show( $id)
    {
        $produto = EventoModel::findOrFail($id);
        return view('produto.detalhe', array('produto' => $produto));

    }
}
