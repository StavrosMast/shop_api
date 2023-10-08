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
        Schema::table('shops', function (Blueprint $table) {
            // Add the foreign key constraint to the shop_owner_id column
            $table->foreign('shop_owner_id')
                ->references('id')
                ->on('shop_owners')
                ->onDelete('cascade');

            // Add the foreign key constraint to the shop_category_id column
            $table->foreign('shop_category_id')
                ->references('id')
                ->on('shop_categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shops', function (Blueprint $table) {
            // Remove the foreign key constraints
            $table->dropForeign(['shop_owner_id']);
            $table->dropForeign(['shop_category_id']);
        });
    }
};