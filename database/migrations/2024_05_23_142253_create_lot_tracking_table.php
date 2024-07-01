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
        Schema::create('lot_tracking', function (Blueprint $table) {
            $table->id('LOT_ID')->primary();
            $table->foreignId('LOT_PROID')->constrained('products', 'PRO_ID');
            $table->foreignId('PID_POID')->constrained('poinput_details', 'PID_ID');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('lot_tracking');
    }
    
};
