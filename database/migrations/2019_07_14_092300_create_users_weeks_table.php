<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_weeks', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
            $table->unsignedBigInteger('week_id');
            $table->foreign('week_id')
            ->references('id')
            ->on('weeks');
            $table->unsignedBigInteger('zone_id');
            $table->foreign('zone_id')
            ->references('id')
            ->on('zones');
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')
            ->references('id')
            ->on('modules');
            $table->string('content')->nullable();
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
        Schema::dropIfExists('users_weeks');
    }
}
