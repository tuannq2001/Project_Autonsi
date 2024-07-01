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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id('VEN_ID')->primary();
            $table->string('VEN_Name', 100);
            $table->string('VEN_Code', 50);
            $table->string('VEN_Address', 255);
            $table->string('VEN_Phone', 20);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
    
};
