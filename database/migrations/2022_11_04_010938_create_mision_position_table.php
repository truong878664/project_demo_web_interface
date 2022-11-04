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
        Schema::create('mision_positions', function (Blueprint $table) {
            $table->id();
            $table->string('name_position', 255);
            $table->integer('position_x');
            $table->integer('position_y');
            $table->integer('rotation_z');
            $table->string('description',255);
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
        Schema::dropIfExists('mision_position');
    }
};
