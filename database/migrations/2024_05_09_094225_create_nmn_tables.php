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
        Schema::create('nmn_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //  name        
            $table->string('sname'); // 
            $table->string('phone'); // phone  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nmn_tables');
    }
};
