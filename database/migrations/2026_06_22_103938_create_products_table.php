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
        $table->id('product_id');
        $table->foreignId('category_id')->references('category_id')->on('category');
        $table->string('name');
        $table->decimal('price', 12, 2);
        $table->timestamps();
    });

    Schema::create('category', function (Blueprint $table) {
        $table->id('category_id');
        $table->string('name');
        $table->timestamps();
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
