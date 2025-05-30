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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('address_id')->nullable()->constrained()->onDelete('cascade');
            $table->decimal('total_amount', 10, 2);
            $table->decimal('discount', 10, 2)->default(0);
            $table->decimal('total_after_discount', 10, 2)->nullable();
            $table->decimal('shipping_fee', 10, 2)->nullable();
            $table->decimal('total_payable_amount', 10, 2)->nullable();
            $table->string('coupon')->nullable();
            $table->foreignId('coupon_id')->constrained()->onDelete('cascade');
            $table->string('paid')->default('no');
            $table->text('note')->nullable();
            $table->double('total_weight')->default(0.01);
            $table->enum('status', [
                'pending',
                'cancel',
                'processing',
                'confirmed',
                'shipped',
                'received',
                'rejected',
                'returned',
                'refunded'
            ])->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
