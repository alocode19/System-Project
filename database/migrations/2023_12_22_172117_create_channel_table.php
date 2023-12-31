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
        Schema::create('channel', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('channel_id');   
            $table->string('channel_name')->nullable();
            $table->string('description')->nullable();
            

        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channel');
    }
};
