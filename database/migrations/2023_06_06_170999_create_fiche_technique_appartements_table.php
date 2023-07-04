<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFicheTechniqueAppartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Fiche_Technique_Appartements', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('appartement_id');
            $table->enum('dependance',['Cave','Sous-sol','Véranda','Terrasse','Garage','Jardin'])->nullable(true);
            $table->enum('vue',['Vue Rue Principale','Vue Mer'])->nullable(true);
            $table->enum('chambre',['Suite parentale','Chambre simple']);
            $table->enum('cuisine',['Fermée','Ouvert']);
            $table->enum('revetement_cuisine',['Choix 01','Choix 02','Choix 03']);
            $table->enum('salle_de_bain',['Douche à l\'Italienne','Baignoire']);
            $table->enum('revetement_salle_de_bain',['Choix 01','Choix 02','Choix 03']);
            $table->enum('revetement_sol',['Choix 01','Choix 02','Choix 03']);
            
            $table->foreign('appartement_id')->references('id')->on('appartments');
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
        Schema::dropIfExists('Fiche_Technique_Appartements');
    }
}
