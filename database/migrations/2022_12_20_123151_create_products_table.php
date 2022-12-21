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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id');
            $table->string('photo');
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('discription_uz');
            $table->string('discription_ru');
            $table->string('discription_en');
            $table->string('instruct_photo')->nullable();
            $table->string('charactiristic_uz')->nullable();
            $table->string('charactiristic_ru')->nullable();
            $table->string('charactiristic_en')->nullable();
            $table->string('link')->nullable();
            $table->string('slug');
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
        Schema::dropIfExists('products');
    }
};
