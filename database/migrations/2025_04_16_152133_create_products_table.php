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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id', 100)->constrained()->cascadeOnDelete();
            $table->string('name', 100)->index();
            $table->string('slug')->unique();
            $table->string('thumbnail');
            $table->text('about');
            $table->unsignedInteger('price');
            $table->boolean('is_popular', 100);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
