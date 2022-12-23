
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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('projects_id');
//            $table->foreign('projects_id')->references('id')->on('projects');
//            $table->unsignedBigInteger('services_id');
//            $table->foreign('services_id')->references('id')->on('services');
            $table->foreignId('projects_id')->constrained('projects');
            $table->foreignId('services_id')->constrained('services');
            $table->string('mi_text');
            $table->string('mi_type');
            $table->string('mi_for');
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
        Schema::dropIfExists('media');
    }
};
