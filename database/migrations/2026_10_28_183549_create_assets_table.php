<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('description')->nullable();
            $table->string('category')->nullable()->index();

            // Dimensões em metros
            $table->decimal('width_m', 8, 2)->nullable();
            $table->decimal('depth_m', 8, 2)->nullable();
            $table->decimal('height_m', 8, 2)->nullable();

            $table->string('creator')->nullable();
            $table->text('license')->nullable();

            // Exemplos: draft, published, archived
            $table->string('status')->default('draft')->index();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};