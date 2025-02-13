<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('timezones', function (Blueprint $table): void {
            $table->bigIncrements('id');
            $table->string('zone_name');
            $table->string('country_code', 2);
            $table->string('abbreviation', 6);
            $table->integer('time_start');
            $table->integer('gmt_offset');
            $table->boolean('dst');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timezones');
    }
};
