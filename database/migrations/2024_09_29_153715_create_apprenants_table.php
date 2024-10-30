<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenants', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet');
            $table->date('date_naissance');
            $table->string('etat');
            $table->string('lieu_naissance');
            $table->string('email');
            $table->string('numero1');
            $table->string('cni');
            $table->string('adresse_domicile');
            $table->string('nom_tuteur');
            $table->string('region_origine');
            $table->string('ville_origine');
            $table->string('nom_parent');
            $table->string('numero_parent');
            $table->string('statut')->default(0);
            $table->foreignId('filieres_id')->constrained()->onDelete('cascade');
          
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
        Schema::dropIfExists('apprenants');
    }
}
