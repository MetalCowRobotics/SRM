<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->integer("organization_id")->index();
            $table->integer("zipcode");
            $table->string("state");
            $table->string("city");
            $table->string("address_1");
            $table->string("address_2")->nullable();
            $table->string("address_type")->nullable();
            $table->date("join_date");
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
        Schema::drop('sponsors');
    }
}
