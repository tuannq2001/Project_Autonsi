<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id('LOC_ID');
            $table->string('LOC_Name', 100);
            $table->string('LOC_Type', 50);
            $table->string('LOC_Field', 50);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('locations');
    }
    
};
