<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilePhoneCarriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_phone_carriers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('CarrierID');
            $table->string('CarrierName');
            $table->string('Email2SMSEmailAddress');
            $table->tinyInteger('NumberOfDigits')->default(10);
            $table->boolean('Display')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobile_phone_carriers');
    }
}
