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
        Schema::create('trips', function (Blueprint $table) {

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('country_id')->constrained('countries');
            // $table->unsignedInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->unsignedInteger('country_id');
            // $table->foreign('country_id')->references('id')->on('countries');
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
        Schema::dropIfExists('trips');
    }
};
