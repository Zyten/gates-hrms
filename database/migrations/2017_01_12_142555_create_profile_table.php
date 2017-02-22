<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_staf');
            $table->string('ic');
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->string('race');
            $table->integer('department_id');
            $table->integer('position_id');
            $table->integer('total_leaves');
            $table->integer('remaining_leaves');

            $table->timestamps();

            /**
             * Add Foreign/Unique/Index
             */
            // $table->foreign('department_id')
            //     ->references('id')
            //     ->on('departments')
            //     ->onDelete('cascade');

            // $table->foreign('position_id')
            //     ->references('id')
            //     ->on('positions')
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
        Schema::drop('staff_profile');
    }
}
