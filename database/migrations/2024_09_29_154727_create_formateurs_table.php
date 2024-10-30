<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('email')->unique();
            $table->string('specialite');
            $table->string('telephone');
            $table->string('cni');
            $table->string('nom_banque');
            $table->string('rib');
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
        Schema::dropIfExists('formateurs');
    }
}
