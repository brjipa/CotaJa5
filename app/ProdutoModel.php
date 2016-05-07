<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = ['nome_produto', 'qte_peso','valor', 'tipo_cod', 'marca_cod', 'mercado_cod'];
}
