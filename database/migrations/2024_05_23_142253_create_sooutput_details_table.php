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
        Schema::create('sooutput_details', function (Blueprint $table) {
            $table->id('SOD_ID')->primary();
            $table->foreignId('SOD_SOOID')->constrained('sooutputs', 'SOO_ID');
            $table->foreignId('SOD_PROID')->constrained('products', 'PRO_ID');
            $table->integer('SOD_Quantity');
            $table->decimal('SOD_UnitPrice', 10, 2);
            $table->decimal('SOD_Total', 10, 2);
            $table->text('SOD_Note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sooutput_details');
    }
    
};
