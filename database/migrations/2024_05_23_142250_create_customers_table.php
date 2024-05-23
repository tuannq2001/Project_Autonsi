<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('CUS_ID');
            $table->string('CUS_Code', 50);
            $table->string('CUS_Name', 100);
            $table->string('CUS_Phone', 20);
            $table->string('CUS_Address', 255);
            $table->text('CUS_Notes')->nullable();
            $table->date('CUS_CreateDate');
            $table->integer('CUS_CreateUserID');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('customers');
    }
    
};
