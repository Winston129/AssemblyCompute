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
        Schema::create('assembly_component', function (Blueprint $table) {
            $table->foreignId("assembly_id")
                ->constrained("assemblies", "id")
                ->onDelete("cascade");
            $table->foreignId("component_id")
                ->constrained("components", "id")
                ->onDelete("cascade");
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
        Schema::dropIfExists('assembly_component');
    }
};
