<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_donations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("sponsor_id")->index();
            $table->string("item_type");
            $table->integer("item_value");
            $table->date("date_received")->nullable();
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
        Schema::drop('sponsor_donations');
    }
}
