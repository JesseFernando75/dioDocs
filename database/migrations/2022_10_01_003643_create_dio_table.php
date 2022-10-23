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
        Schema::create('dio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pop')->constantained('pop')->cascadeOnDelete();
            $table->foreignId('id_tipo')->constantained('tipo_dio')->cascadeOnDelete();
            $table->string('nome');
            $table->string('descricao');
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
        Schema::dropIfExists('dio');
        $table->dropForeign(['id_pop']);
        $table->dropColumn('id_pop');
        $table->dropForeign(['id_tipo']);
        $table->dropColumn('id_tipo');
    }
};
