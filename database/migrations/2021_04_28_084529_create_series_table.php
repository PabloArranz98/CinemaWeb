<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();

            
            $table->string('titulo');
            $table->integer('AñoDeEmision');
            $table->integer('AñoDeFinalizacíon');
            $table->integer('temporadas');
            $table->string('director');
            $table->text('reparto');
            $table->text('sinopsis');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('genero_id');
         
         

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');

            
            
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
        Schema::dropIfExists('series');
    }
}
