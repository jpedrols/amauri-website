<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('titulo');
            $table->integer('visualizacoes')->default(0);
            $table->text('conteudo');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        //
        DB::table('paginas')->insert([
            'nome' => 'Início',
            'titulo' => 'Seja Bem-Vindo(a) a Amauri Contabilidade',
            'conteudo' => 'Nossa empresa está no mercado há 27 anos e tem como missão levar inovação nos processos burocráticos da sua empresa.',
        ]);

        DB::table('paginas')->insert([
            'nome' => 'Sobre nós',
            'titulo' => 'Sobre nós, somos uma empresa de contabilidade que há mais de 27 anos cuidamos dos processos burocráticos da sua empresa',
            'conteudo' => '-',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paginas');
    }
};
