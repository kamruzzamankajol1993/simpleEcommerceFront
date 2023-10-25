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
        Schema::create('system_infos', function (Blueprint $table) {
            $table->id();
            $table->string('websiteName')->nullable();
            $table->text('websiteIcon')->nullable();
            $table->text('websiteLogo')->nullable();
            $table->string('websitePhone')->nullable();
            $table->string('websiteEmail')->nullable();
            $table->text('websiteAbout')->nullable();
            $table->text('websiteAddress')->nullable();
            $table->text('url_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_infos');
    }
};
