<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsClearanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_clearance', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->string('project_owner',50);
            $table->string('project_title',50);
            $table->string('project_location',100);
            $table->string('owner_address',255);
            $table->string('contractor',100);
            $table->string('auth_representative',100);
            $table->string('contact_number',50);
            $table->string('email',100);
            $table->decimal('total_floor_area', 15, 2);
            $table->integer('no_of_storey');
            $table->string('province',100);
            $table->string('type_of_occupancy',100);
            $table->string('region',100);
            $table->tinyInteger('fsec')->unsigned()->nullable();
            $table->tinyInteger('fsic')->unsigned()->nullable();
            $table->decimal('amount',15, 2);
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes()->nullable();

            $table->foreign('client_id')    ->references('id')->on('clients')   ->onDelete('cascade');
            $table->foreign('created_by')   ->references('id')->on('users') ->onDelete('cascade');
            $table->foreign('updated_by')   ->references('id')->on('users') ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients_clearance');
    }
}
