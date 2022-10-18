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
        
        Schema::create('cidade', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('id_estado')->unsigned();
            $table->foreign('id_estado')->references('id')->on('estado');
            $table->string('nome', 64);
            $table->timestamps();
            $table->softDeletes();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('cidade');

    }

};