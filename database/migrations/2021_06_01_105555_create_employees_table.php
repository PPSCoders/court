<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('cid')->nullable();
            $table->string('email')->nullable();
            $table->string('profile_uri')->nullable();
            $table->integer('emp_id')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('permenant_address')->nullable();
            $table->integer('contact')->nullable();

            $table->integer('designation_id')->unsigned()->nullable();;
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');

            $table->integer('position_id')->unsigned()->nullable();;
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');

            $table->integer('agency_id')->unsigned()->nullable();;
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');

            $table->integer('employee_type')->nullable();
            $table->string('employee_status')->nullable();

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
        Schema::dropIfExists('employees');
    }
}
