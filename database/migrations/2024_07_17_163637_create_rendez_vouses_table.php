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
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('LastName')->nullable();
            $table->string('Adresse')->nullable();
            $table->string('Telephone')->nullable();
            $table->string('Email')->nullable();
            $table->string('Superficie')->nullable();
            $table->string('Energie')->nullable();
            $table->string('Quantite')->nullable();
            $table->string('Date')->nullable();
            $table->string('Heure')->nullable();
            $table->string('Message')->nullable();
            $table->string('AvisImpots')->nullable();
            $table->string('FactureGazElec')->nullable();
            $table->enum('status', ['en cours', 'terminé'])->default('en cours');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez_vouses');
    }
};
