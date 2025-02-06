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
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->integer("code")->unique();  //? Код
            $table->string("model");            //? Модель
            $table->string("name");             //? Название
            $table->integer("quantity");        //? Количество
            $table->string("unit");             //? Единица измерения
            $table->string("type");             //? Тип
            $table->string("category");         //? Категория
            $table->string("attribute");        //? Атрибут
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
        Schema::dropIfExists('components');
    }
};
