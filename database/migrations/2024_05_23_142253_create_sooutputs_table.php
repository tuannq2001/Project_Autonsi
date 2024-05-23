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
        Schema::create('sooutputs', function (Blueprint $table) {
            $table->id('SOO_ID');
            $table->string('SOO_Code', 50);
            $table->integer('SOO_USRID');
            $table->date('SOO_CreateDate');
            $table->foreignId('SOO_CUSID')->constrained('customers', 'CUS_ID');
            $table->date('SOO_Date');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sooutputs');
    }
    
};
