<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('status_attendance_id');
            $table->unsignedBigInteger('shift_attendance_id');
            $table->time('in');
            $table->time('out')->nullable();
            $table->longText('note')->nullable();
            $table->date('date_time');
            $table->foreign('status_attendance_id')->references('id')->on('status_attendances')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('shift_attendance_id')->references('id')->on('shift_attendances')->onDelete('cascade');
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
        Schema::dropIfExists('attendances');
        Schema::dropIfExists('users');
        Schema::dropIfExists('status_attendances');
        Schema::dropIfExists('shift_attendances');


        
    }
}
