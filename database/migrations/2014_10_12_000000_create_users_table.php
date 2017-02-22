<?php

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
            $table->increments('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('profile_id');
            $table->smallInteger('active')->default(0);
            $table->smallInteger('is_deleted')->default(0);
            $table->rememberToken();
            $table->timestamps();

            /**
             * Add Foreign/Unique/Index
             */
            // $table->foreign('profile_id')
            //     ->references('id')
            //     ->on('profile')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
