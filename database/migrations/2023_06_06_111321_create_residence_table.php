<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residences', function (Blueprint $table) {
            $table->string('id', 255)->primary();
            $table->string('nom');
            $table->float('longeur');
            $table->float('largeur');
            $table->float('surface');
            $table->boolean('bati');
            $table->integer('nombre_blocs')->nullable(true);
            $table->integer('nombre_appartements')->nullable(true);
            $table->boolean('a_vendre');
            $table->string('terrain_id');
            $table->string('proprietaire');
            $table->string('fiche_vente')->nullable(true);

            $table->foreign('terrain_id')->references('id')->on('terrains')->onDelete('cascade');
            $table->foreign('proprietaire')->references('id')->on('users');
            $table->foreign('fiche_vente')->references('id')->on('fiche_ventes');
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
        Schema::dropIfExists('residences');
    }
}
