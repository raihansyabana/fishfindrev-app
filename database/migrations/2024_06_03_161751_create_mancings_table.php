<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mancings', function (Blueprint $table) {
            $table->id();
            $table->string('mancing_title')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->string('price')->nullable();
            $table->string('wifi')->default('yes');
            $table->string('mancing_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mancings');
    }
};
