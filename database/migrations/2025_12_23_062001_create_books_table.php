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
        Schema::disableForeignKeyConstraints();
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('isbn')->unique();
            $table->string('title');
            $table->string('description')->nullable();
            $table->foreignId('categories_id')
                ->constrained('categories')
                ->cascadeOnDelete();
            $table->foreignId('author_id')
                ->constrained('authors')
                ->cascadeOnDelete();
            $table->string('publisher')->nullable();
            $table->year('published_year')->nullable();
            $table->integer('pages')->nullable();
            $table->integer('stock');
            $table->string('cover_images')->nullable();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
