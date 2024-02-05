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
        Schema::table('tp_detail_item', function (Blueprint $table) {
            $table->string('signa')->default('');
            $table->string('cara_pakai')->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tp_detail_item', function (Blueprint $table) {
            //
        });
    }
};
