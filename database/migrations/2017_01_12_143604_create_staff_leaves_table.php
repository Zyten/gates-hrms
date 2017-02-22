<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_leaves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->date('application_date');
            $table->date('leave_from');
            $table->date('leave_to');
            $table->integer('duration');
            $table->smallInteger('is_approved');
            $table->date('approval_date');
            $table->integer('leave_reason_id');

            $table->timestamps();


            /**
             * Add Foreign/Unique/Index
             */
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('cascade');

            // $table->foreign('leave_reason_id')
            //     ->references('id')
            //     ->on('leave_reasons')
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
        Schema::drop('staff_leaves');
    }
}
