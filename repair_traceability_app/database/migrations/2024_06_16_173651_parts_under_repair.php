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
        Schema::create('parts_to_repair', function (Blueprint $table){
            $table->id();
            $table->foreignId('RNO_ID')->constraint('models');
            $table->string('SNA'); 
            $table->string('INIT_DATE')->nullable();
            $table->string('END_DATE')->nullable();
            $table->boolean('IN_PROCESS')->default(0);
            $table->boolean('REPAIRED')->default(0);
            $table->boolean('SCRAP')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts_to_repair');
    }
};
