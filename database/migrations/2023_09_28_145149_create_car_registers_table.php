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
        Schema::create('car_registers', function (Blueprint $table) {
            $table->id();
            $table->string("IdNumber", 255);
            $table->string("firstNameKh", 100);
            $table->string("lastNameKh", 100);
            $table->string("firstName", 100);
            $table->string("lastName", 100);
            $table->integer("role");
            $table->string("entityName", 100);
            $table->string("phoneNumber", 20)->unique();
            $table->string("email", 100)->unique();
            $table->string("address", 255);
            $table->date("yearProduce");
            $table->string("carLicensePlate", 100)->unique();
            $table->string("carModel", 100);
            $table->string("color", 100);
            $table->string("img", 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_registers');
    }
};
