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
        Schema::create('groupes', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('libelle', 25); // Obligatoire, longueur max 25
            $table->foreignId('filiere_id') // Clé étrangère
                  ->constrained('filieres') // Référence la table filieres.id
                  ->onDelete('cascade'); // Supprime les groupes liés si la filière est supprimée
            $table->timestamps(); // Colonnes created_at, updated_at
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('groupes');
    }
    
};
