<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destaques', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('pagina_id');
            $table->foreign('pagina_id')->references('id')->on('paginas')->onDelete('cascade');
            $table->string('imagem');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        //
        DB::table('destaques')->insert([
            'nome' => 'Banner',
            'pagina_id' => 1,
            'imagem' => 'sistema/imagens/destaques/1/sobre_nos_banner.jpg',
        ]);

        DB::table('destaques')->insert([
            'nome' => 'Seção 1',
            'pagina_id' => 1,
            'imagem' => 'sistema/imagens/destaques/1/sobre_nos_secao_1.jpg',
        ]);

        DB::table('destaques')->insert([
            'nome' => 'Seção 2',
            'pagina_id' => 1,
            'imagem' => 'sistema/imagens/destaques/1/sobre_nos_secao_2.jpg',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destaques');
    }
};
