<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('filieres', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('titre', 100); // Obligatoire, longueur max 100
            $table->string('description', 300); // Obligatoire, longueur max 300
            $table->timestamps(); // Colonnes created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('filieres');
    }
};
