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
        Schema::create('tipo_dio', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->integer('qtd_portas');
            $table->integer('qtd_cabo_optico');
            $table->string('tipo_conector');
            $table->string('tipo_polimento');
            $table->string('tipo_instalacao');
            $table->string('acabamento');
            $table->decimal('comprimento', $precision = 15, $scale = 2);
            $table->decimal('largura', $precision = 15, $scale = 2);
            $table->decimal('altura', $precision = 15, $scale = 2);
            $table->decimal('peso', $precision = 15, $scale = 2);
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
        Schema::dropIfExists('tipo_dio');
    }
};
