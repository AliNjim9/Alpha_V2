<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerrainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terrains', function (Blueprint $table) {
            $table->string('id', 255)->primary();
            $table->float('longeur');
            $table->float('largeur');
            $table->float('surface');
            $table->boolean('bati');
            $table->boolean('a_vendre');
            $table->string('proprietaire');
            $table->string('fiche_vente')->nullable(true);

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
        Schema::dropIfExists('terrains');
    }
}
