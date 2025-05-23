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
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('brand_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('promotion_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('banner_id')->nullable()->constrained('assets')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('initial_price', 10, 2);
            $table->integer('stock')->default(0);
            $table->string('tag')->nullable()->default('new');
            $table->integer('views')->default(0);
            $table->string('sku')->unique();
            $table->string('color')->nullable();
            // Weight
            $table->double('weight')->default(0.01);
            $table->string('size')->nullable();
            $table->boolean('active')->default(true);
            // advertised (true when email is sent out to the users)
            $table->boolean('advertised')->default(false);
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
