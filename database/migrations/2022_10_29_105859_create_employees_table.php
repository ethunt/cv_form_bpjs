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
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('profileCode')->from(12345678);
            $table->string('wantedJobTitle', 100);
            $table->string('firstName', 100);
            $table->string('lastName', 100);
            $table->string('email', 100)->unique();
            $table->string('phone', 15);
            $table->string('country', 50);
            $table->string('city', 50);
            $table->text('address');
            $table->integer('postalCode');
            $table->string('drivingLicense', 20);
            $table->string('nationality', 100);
            $table->string('placeOfBirth', 100);
            $table->date('dateOfBirth');
            $table->string('photoUrl', 200)->nullable();
            $table->text('workingExperience')->nullable();
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
        Schema::dropIfExists('employee');
    }
};
