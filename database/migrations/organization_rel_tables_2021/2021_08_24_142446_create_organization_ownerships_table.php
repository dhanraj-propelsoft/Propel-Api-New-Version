<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationOwnershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    if (App::environment('local')) {
                // The environment is local
                Schema::disableForeignKeyConstraints();
                $this->down();
                Schema::enableForeignKeyConstraints();
            }
       Schema::connection(pBusinessDBConnectionName())->create('organization_ownerships', function (Blueprint $table) {
            $table->increments('id');
             $table->string('name','40')->nullable(false);
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
        Schema::connection(pBusinessDBConnectionName())->dropIfExists('organization_ownerships');
    }
}
