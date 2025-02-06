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
        Schema::create('assemblies', function (Blueprint $table) {
            $table->id();
            $table->integer("code")->unique();      //? Код
            $table->string("type");                 //? Тип сборки
            $table->string("form_factor");           //? Форм-фактор 
            $table->string("budget");               //? Бюджет
            $table->integer("power_consumption");    //? Энергопотребление
            $table->string("compatibility");        //? Совместимость
            $table->string("design");               //? Дизайн
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
        Schema::dropIfExists('assemblies');
    }
};
