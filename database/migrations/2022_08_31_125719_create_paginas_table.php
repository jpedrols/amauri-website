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
            'nome' => 'Sobre nós',
            'titulo' => 'Cuidamos da contabilidade do seu negócio como se fosse a nossa!',
            'conteudo' => 'Nosso objetivo é simplificar e reduzir a burocracia no mundo contábil para você, pois queremos que você dedique sua energia à gestão de sua empresa. Temos uma equipe qualificada com atendimento rápido e personalizado oferecendo soluções eficientes para micro empresas até grandes corporações.',
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
