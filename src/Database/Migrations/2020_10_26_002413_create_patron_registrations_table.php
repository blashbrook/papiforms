<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatronRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patron_registrations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('LogonBranchID')->default('3');
            $table->integer('LogonUserID')->default('74');
            $table->integer('LogonWorkstationID')->default('223');
            $table->integer('PatronBranchID')->default('3');
            $table->string('PostalCode', 12)->nullable();
            $table->string('ZipPlusFour', 4)->nullable();
            $table->string('City', 32)->nullable();
            $table->string('State', 32)->nullable();
            $table->string('County', 32)->nullable();
            $table->integer('CountryID')->nullable()->default(1);
            $table->string('StreetOne', 64)->nullable();
            $table->string('StreetTwo', 64)->nullable();
            $table->string('StreetThree', 64)->nullable();
            $table->string('NameFirst', 32)->nullable();
            $table->string('NameLast', 32)->nullable();
            $table->string('NameMiddle', 32)->nullable();
            $table->string('User1', 64)->nullable();
            $table->string('User2', 64)->nullable();
            $table->string('User3', 64)->nullable();
            $table->string('User4', 64)->nullable();
            $table->string('User5', 64)->nullable();
            $table->string('Gender')->nullable();
            $table->string('Birthdate')->nullable();
            $table->string('PhoneVoice1', 20)->nullable();
            $table->string('PhoneVoice2', 20)->nullable();
            $table->string('PhoneVoice3', 20)->nullable();
            $table->integer('Phone1CarrierID')->nullable();
            $table->integer('Phone2CarrierID')->nullable();
            $table->integer('Phone3CarrierID')->nullable();
            $table->string('EmailAddress', 64)->nullable();
            $table->string('AltEmailAddress', 64)->nullable();
            $table->smallInteger('LanguageID')->nullable()->default(1);
            $table->string('UserName', 50)->nullable();
            $table->string('Password', 256)->nullable();
            $table->string('Password2', 256)->nullable();
            $table->integer('DeliveryOptionID')->nullable();
            $table->boolean('EnableSMS')->nullable();
            $table->tinyInteger('TxtPhoneNumber')->nullable();
            $table->string('Barcode')->nullable();
            $table->integer('EReceiptOptionID')->nullable();
            $table->integer('PatronCode')->default(3);
            $table->string('ExpirationDate')->nullable();
            $table->string('AddrCheckDate')->nullable();
            $table->integer('GenderID')->nullable();
            $table->string('LegalNameFirst', 32)->nullable();
            $table->string('LegalNameLast', 32)->nullable();
            $table->string('LegalNameMiddle', 32)->nullable();
            $table->boolean('UseLegalNameOnNotices')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patron_registrations');
    }
}
