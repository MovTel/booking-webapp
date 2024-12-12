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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('owner_id');
            $table->string('location');
            $table->string('property_name');
            $table->string('property_description',5000);
            $table->string('property_address', 500);
            $table->string('property_type');
            $table->string('category');
            $table->integer('capacity');
            $table->string('maps_url', 1000)->nullable();
            $table->string('property_view', 1000)->nullable();
            $table->string('amenities')->nullable();
            $table->string('space');
            $table->string('per_hour_4_hrs')->nullable();
            $table->string('per_hour_12_hrs')->nullable();
            $table->string('per_hour_24_hrs')->nullable();
            $table->string('plus_48_hrs')->nullable();
            $table->string('downpayment')->nullable();
            $table->string('status')->default(0);
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
        Schema::dropIfExists('units');
    }
};
