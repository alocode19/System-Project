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
        Schema::table('channel', function (Blueprint $table) {
            $table->unsignedBigInteger('announcement_id');
            $table->foreign('announcement_id')->references('id')->on('channel');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('channel', function (Blueprint $table) {
            //
        });
    }
};
