<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    // au_description, au_address, au_phone, au_email, au_logo, au_location, au_openingHours
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('au_description');
            $table->string('au_address');
            $table->string('au_phone');
            $table->string('au_email');
            $table->string('au_logo');
            $table->string('au_location');
            $table->string('au_openingHours');
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
        Schema::dropIfExists('about_us');
    }
};
