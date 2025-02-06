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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->integer("code")->unique();      //? Код
            $table->string("name");                 //? Название
            $table->decimal("consumption", 10, 5);  //? Расход
            $table->string("unit");                 //? Единица
            $table->decimal("waste", 10, 5);        //? Отходы
            $table->string("waste_unit");           //? Единица отходов
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
        Schema::dropIfExists('materials');
    }
};
