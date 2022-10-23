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
        Schema::create('pop', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cidade')->constantained('cidade')->cascadeOnDelete();
            $table->string('nome');
            $table->string('endereco');
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
        Schema::dropIfExists('pop');
        $table->dropForeign(['id_cidade']);
        $table->dropColumn('id_cidade');
    }
};
