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
        Schema::create('poinputs', function (Blueprint $table) {
            $table->id('POI_ID')->primary();
            $table->string('POI_Code', 50);
            $table->integer('POI_USRID');
            $table->date('POI_CreateDate');
            $table->foreignId('POI_VENID')->constrained('vendors', 'VEN_ID');
            $table->date('POI_Date');
            $table->double('POI_Total')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('poinputs');
    }
    
};
