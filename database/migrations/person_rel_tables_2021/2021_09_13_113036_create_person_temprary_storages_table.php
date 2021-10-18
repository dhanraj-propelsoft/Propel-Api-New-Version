<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonTempraryStoragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_temprary_storages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mobile_no')->nullable(false);
            $table->text('person_details', '550')->nullable(true);
            $table->integer('status')->nullable(true);
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
        Schema::dropIfExists('person_temprary_storages');
    }
}
