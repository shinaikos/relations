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
        Schema::table('invoices', function (Blueprint $table) {
            $table->foreign('address_id')
                ->on("addresses")
                ->references('id')
                ->onDelete('SET NULL');

            $table->foreign('user_id')
                ->on("users")
                ->references('id')
                ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign('address_id');
        });
    }
};
