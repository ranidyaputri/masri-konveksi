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
        Schema::create('transaction', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedBigInteger('id_order');
            $table->foreign('id_order')->references('id')->on('order')->cascadeOnDelete()->cascadeOnUpdate();
            $table->double('total_bayar');
            $table->string('tipe_bayar');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
