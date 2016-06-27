<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("sponsor_id");
            $table->string("contact_name");
            $table->string("phone1")->nullable();
            $table->string("phone2")->nullable();
            $table->string("phone3")->nullable();
            $table->string("phone4")->nullable();
            $table->string("phone5")->nullable();
            $table->string("email1")->nullable();
            $table->string("email2")->nullable();
            $table->string("email3")->nullable();
            $table->string("email4")->nullable();
            $table->string("email5")->nullable();
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
        Schema::drop('sponsor_contacts');
    }
}
