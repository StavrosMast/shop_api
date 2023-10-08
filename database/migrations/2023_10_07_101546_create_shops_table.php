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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('shop_owner_id');
            $table->unsignedBigInteger('shop_category_id');
            $table->text('description');
            $table->string('open_hours');
            $table->string('city');
            $table->string('address')->nullable();
            $table->timestamps();

            // $table->foreign('shop_owner_id')->references('id')->on('shop_owners');
            // $table->foreign('shop_category_id')->references('id')->on('shop_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};