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
            $table->string('orderId')->nullable();
            $table->string('clientName')->nullable();
            $table->string('clientPhoneNumber')->nullable();
            $table->text('clientDeliveryAddress')->nullable();
            $table->text('clientComment')->nullable();
            $table->string('paymentType')->nullable();
            $table->string('deliveryAreaType')->nullable();
            $table->string('subTotal')->nullable();
            $table->string('shippingPrice')->nullable();
            $table->string('mainTotal')->nullable();
            $table->string('productType')->nullable();
            $table->timestamps();
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
