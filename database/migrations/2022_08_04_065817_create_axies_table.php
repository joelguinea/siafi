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
        Schema::create('axies', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('mouth');
            $table->string('eyes');
            $table->string('tail');
            $table->string('ears');
            $table->string('horns');
            $table->string('back');
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
        Schema::dropIfExists('axies');
    }
};
