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
        Schema::create('package_combos', function (Blueprint $table) {
            $table->id();
            $table->string('productName')->nullable();
            $table->string('productPrice')->nullable();
            $table->string('productDiscountPrice')->nullable();
            $table->text('productShortDescription')->nullable();
            $table->text('productMainDescription')->nullable();
            $table->string('productImageOne')->nullable();
            $table->string('productImageTwo')->nullable();
            $table->string('productImageThree')->nullable();
            $table->string('productImageFour')->nullable();
            $table->string('productImageFive')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_combos');
    }
};
