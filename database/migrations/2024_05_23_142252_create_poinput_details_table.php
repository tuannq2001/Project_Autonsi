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
        Schema::create('poinput_details', function (Blueprint $table) {
            $table->id('PID_ID')->primary();
            $table->foreignId('PID_POIID')->constrained('poinputs', 'POI_ID');
            $table->foreignId('PID_PROID')->constrained('products', 'PRO_ID');
            $table->integer('PID_Quantity');
            $table->decimal('PID_UnitPrice', 10, 2);
            $table->decimal('PID_Total', 10, 2);
            $table->text('PID_Note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('poinput_details');
    }
    
    
};
