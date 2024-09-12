<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseModesTable extends Migration
{
    public function up()
    {
        Schema::create('use_modes', function (Blueprint $table) {
            $table->id();
            $table->string('videoUrl');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('use_modes');
    }
}
