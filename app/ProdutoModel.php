<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table = 'produtos';

    protected $fillable = ['nome_produto', 'qtde_peso', 'valor', 'tipo_cod', 'marca_cod', 'mercado_cod'];

    protected $hidden = ['password', 'remember_token','created_at', 'updated_at', 'cod_produto'];
}
