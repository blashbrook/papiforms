<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostalCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postal_codes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('PostalCodeID');
            $table->string('PostalCode');
            $table->string('City');
            $table->string('State')->default('KY');
            $table->tinyInteger('CountryID')->default('1');
            $table->string('County')->default('DAVIESS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postal_codes');
    }
}
