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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('ODE_ID')->primary();
            $table->foreignId('ODE_ORQID')->constrained('orders', 'ORD_ID');
            $table->foreignId('ODE_PROID')->constrained('products', 'PRO_ID');
            $table->integer('ODE_Quantity');
            $table->decimal('ODE_UnitPrice', 10, 2);
            $table->decimal('ODE_Total', 10, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
    
};
