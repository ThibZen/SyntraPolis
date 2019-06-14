<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('LoginID');
            $table->text('FirstName');
            $table->text('LastName');
            $table->text('City');
            $table->text('Zip');
            $table->text('Street');
            $table->text('StreetNumber');
            $table->text('Mail');
            $table->text('Password');
            $table->integer('ReservationID');
            $table->tinyInteger('TripleStrike');
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
        Schema::dropIfExists('users');
    }
}
