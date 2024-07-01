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
        Schema::create('products', function (Blueprint $table) {
            $table->id('PRO_ID')->primary();
            $table->string('PRO_Name', 100);
            $table->string('PRO_Code', 50);
            $table->foreignId('PRO_LOCID')->nullable()->constrained('locations', 'LOC_ID');
            $table->date('PRO_CreateDate');
            $table->integer('PRO_Status');
            $table->decimal('PRO_Price', 10, 2);
            $table->string('PRO_Place', 100)->nullable();
            $table->text('PRO_Description')->nullable();
            $table->foreignId('PRO_VENID')->constrained('vendors', 'VEN_ID');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('products');
    }
    
};
