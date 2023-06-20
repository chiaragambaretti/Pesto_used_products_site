<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   
        //creazione colonna revisor (ha lo scopo di assegnare il ruolo di revisore ad un utente)
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_revisor')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        //rimozione colonna revisor
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_revisor');
        });
    }
};
