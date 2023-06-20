<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartements', function (Blueprint $table) {
            $table->string('id', 255)->primary();
            $table->string('nom_bloc')->nullable(true);
            $table->float('longeur');
            $table->float('largeur');
            $table->float('surface');
            $table->integer('nombre_pieces')->nullable(true);
            $table->boolean('bati');
            $table->boolean('a_vendre');
            $table->string('bloc_id');
            $table->string('residence_id');
            $table->string('proprietaire');
            $table->string('fiche_vente')->nullable(true);
            $table->string('fiche_technique')->nullable(true);

            
            $table->foreign('bloc_id')->references('id')->on('blocs')->onDelete('cascade');
            $table->foreign('residence_id')->references('id')->on('residences')->onDelete('cascade');
            $table->foreign('proprietaire')->references('id')->on('users');
            $table->foreign('fiche_vente')->references('id')->on('fiche_ventes');
            $table->foreign('fiche_technique')->references('id')->on('fiche_technique_appartements');
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
        Schema::dropIfExists('appartements');
    }
}
