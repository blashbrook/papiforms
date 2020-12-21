<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatronStatClassCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patron_stat_class_codes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('StatisticalClassID');
            $table->integer('OrganizationID');
            $table->string('Description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patron_stat_class_codes');
    }
}
