<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mobile_phone_carriers', function (Blueprint $table) {
            $table->id();
            $table->integer('CarrierID');
            $table->string('CarrierName');
            $table->string('Email2SMSEmailAddress');
            $table->integer('NumberOfDigits');
            $table->tinyInteger('Display');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mobile_phone_carriers');
    }
};
