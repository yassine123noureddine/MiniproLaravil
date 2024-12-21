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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('nom_complet', 300); // Obligatoire, longueur max 300
            $table->enum('genre', ['M', 'F'])->default('M'); // Par défaut "M"
            $table->date('date_naissance')->nullable(); // Nullable
            $table->decimal('note', 4, 2); // Obligatoire, précision 4,2
            $table->foreignId('groupe_id') // Clé étrangère
                  ->constrained('groupes') // Référence la table groupes.id
                  ->onDelete('cascade'); // Supprime les stagiaires liés si le groupe est supprimé
            $table->timestamps(); // Colonnes created_at, updated_at
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stagiaires');
    }
    
};
