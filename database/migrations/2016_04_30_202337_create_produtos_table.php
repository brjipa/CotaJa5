<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('cod_produto');
            $table->string('nome_produto');
            $table->string('qtde_peso');
            $table->decimal('valor', 5,2);
            $table->timestamps();

            $table->integer('tipo_cod')-> unsigned();
            $table->foreign('tipo_cod')->
                    references('cod_tp_produto')->
                    on('tipo_produtos');

            $table->integer('marca_cod')-> unsigned();
            $table->foreign('marca_cod')->
                    references('cod_marca')->
                    on('marcas');

            $table->integer('mercado_cod')-> unsigned();
            $table->foreign('mercado_cod')->
                    references('cod_mercado')->
                    on('supermercados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produtos');
    }
}
