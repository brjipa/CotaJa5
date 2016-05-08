<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarcaModel extends Model
{
    protected $table = 'marcas';

    protected $fillable = ['nome_marca'];

    protected $hidden = ['password', 'remember_token','created_at', 'updated_at', 'cod_marca'];
}
