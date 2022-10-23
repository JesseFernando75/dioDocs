<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('porta_dio', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_dio')->constantained('dio')->cascadeOnDelete();
            $table->foreignId('id_status')->constantained('status_porta')->cascadeOnDelete();
            $table->string('nome');
            $table->integer('num_porta');
            $table->integer('velocidade_link');
            $table->string('primeira_ceo');
            $table->string('ultima_ceo');
            $table->string('tipo_cordao');
            $table->decimal('potencia_sinal', $precision = 15, $scale = 2);
            $table->string('observacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('porta_dio');
        $table->dropForeign(['id_dio']);
        $table->dropColumn('id_dio');
        $table->dropForeign(['id_status']);
        $table->dropColumn('id_status');
    }
};
