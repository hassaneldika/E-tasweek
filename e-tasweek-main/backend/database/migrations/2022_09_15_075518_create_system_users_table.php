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
    public function up()
    {
        Schema::create('system_users', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('system_roles_id');
//            $table->foreign('system_roles_id')->references('id')->on('system_roles');
            $table->foreignId('system_roles_id')->constrained('system_roles');
            $table->string('su_f_name');
            $table->string('su_l_name');
            $table->string('su_email')->unique();
            $table->string('su_phone');
            $table->string('su_username')->unique();
            $table->string('su_password');

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
        Schema::dropIfExists('system_users');
    }
};
