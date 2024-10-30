<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pffs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_theme');
            $table->string('files');
            $table->string('nom_acteur');
            $table->foreignId('filiere_id')->constrained()->onDelete('cascade');
            $table->foreignId('annee_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('pffs');
    }
}
