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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('ORD_ID')->primary();
            $table->string('ORD_Code', 50);
            $table->foreignId('ORD_CUSID')->constrained('customers', 'CUS_ID');
            $table->date('ORD_CreateDate');
            $table->integer('ORD_USRID');
            $table->text('ORD_Description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('orders');
    }
    
};
