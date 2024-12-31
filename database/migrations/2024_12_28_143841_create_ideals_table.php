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
        Schema::create('ideals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_profiles')->constrained('profiles', 'id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_aspeks')->constrained('aspeks', 'id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_kriterias')->constrained('kriterias', 'id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ideals');
    }
};
