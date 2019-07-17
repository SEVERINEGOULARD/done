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
            $table->bigIncrements('id')->unsigned();
            $table->string('pseudo');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('dob')->nullable();
            $table->string('avatar')->default('/avatar.png');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
            ->references('id')
            ->on('cities');
            $table->unsignedBigInteger('template_id');
            $table->foreign('template_id')
            ->references('id')
            ->on('templates');
            $table->integer('role')->default(2);//1 admin - 2 user
            $table->rememberToken();
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
