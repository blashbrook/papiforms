<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('udf_option_defs', function (Blueprint $table) {
            $table->id();
            $table->integer('OrgID');
            $table->integer('UDFOptionID');
            $table->integer('AttrID');
            $table->integer('DisplayOrder');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('udf_option_defs');
    }
};
