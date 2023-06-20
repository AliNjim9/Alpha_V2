<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratsVenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrat_ventes', function (Blueprint $table) {
            
            $table->uuid('id')->primary();
            $table->string('acheteur_id');
            $table->string('vendeur_id');
            $table->string('vente_id_terrain')->nullable(true);
            $table->string('vente_id_residence')->nullable(true);
            $table->string('vente_id_appartement')->nullable(true);
            $table->enum('type_vente',['terrain','residence','apaprtement']);
            
            $table->foreign('acheteur_id')->references('id')->on('users');
            $table->foreign('vendeur_id')->references('id')->on('users');
            $table->foreign('vente_id_terrain')->references('id')->on('terrains');
            $table->foreign('vente_id_residence')->references('id')->on('residences');
            $table->foreign('vente_id_appartement')->references('id')->on('appartements');
            $table->dateTime('date_contrat');
            $table->timestamps();
            
        });
        DB::statement('ALTER TABLE contrat_ventes ADD CONSTRAINT type_vente_constraint CHECK (type_vente IN (\'terrain\', \'residence\', \'apaprtement\'))');
        DB::statement('ALTER TABLE contrat_ventes ADD CONSTRAINT fk_not_null_constraint CHECK (
            (
                type_vente = \'terrain\' AND vente_id_terrain IS NOT NULL AND vente_id_residence IS NULL AND vente_id_appartement IS NULL
            )
            OR
            (
                type_vente = \'residence\' AND vente_id_terrain IS NULL AND vente_id_residence IS NOT NULL AND vente_id_appartement IS NULL
            )
            OR
            (
                type_vente = \'appartement\' AND vente_id_terrain IS NULL AND vente_id_residence IS NULL AND vente_id_appartement IS NOT NULL
            )
        );'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrat_ventes');
    }
}
