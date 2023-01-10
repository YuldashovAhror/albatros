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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->integer('new_cat_id');
            $table->string('date');
            $table->string('photo');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('discription_uz');
            $table->string('discription_ru');
            $table->string('discription_en');
            $table->string('photo_2')->nullable();
            $table->string('link');
            $table->integer('year');
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
        Schema::dropIfExists('news');
    }
};
