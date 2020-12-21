<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUdfOptionDefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('udf_option_defs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('OrgID');
            $table->foreignID('UDFOptionID')->constrained('udf_options')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('AttrID');
            $table->integer('DisplayOrder');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('udf_option_defs');
    }
}
