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
        //creazione colonna is_accepted (si occuperà di accettare o rifiutare un articolo)
        Schema::table('announcements', function (Blueprint $table) {
            $table->boolean('is_accepted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //rimozione colonna is_accepted  
        Schema::table('announcements', function (Blueprint $table) {
            $table->dropColumn('is_accepted');
        });
    }
};
