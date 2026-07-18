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
    Schema::create('categories', function (Blueprint $table) {
        $table->ulid('category_id')->primary();
        $table->string('name');
        $table->string('image_url')->nullable();
        $table->timestamps();
    });

    Schema::create('products', function (Blueprint $table) {
        $table->ulid('product_id')->primary();
        $table->ulid('category_id')->index();
        $table->foreign('category_id')->references('category_id')->on('categories');
        $table->string('name');
        $table->string('image_url')->nullable();
        $table->decimal('price', 12, 2);
        $table->timestamps();
    });

    Schema::create('orders', function (Blueprint $table) {
        $table->ulid('order_id')->primary();
        $table->ulid('product_id')->index();
        $table->foreign('product_id')->references('product_id')->on('products');
        $table->foreignId('user_id')->references('id')->on('users');
        $table->decimal('total_price', 12, 2);
        $table->enum('status', ['pending', 'completed', 'cancel'])->default('pending');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('orders');
    }
};
