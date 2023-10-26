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
        Schema::create('categoria_curso', function (Blueprint $table) {
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('curso_id');
            $table->timestamps();
            
            $table->primary(['categoria_id', 'curso_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_curso');
    }
};
