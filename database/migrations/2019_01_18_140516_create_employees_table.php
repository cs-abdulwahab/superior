<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::disableForeignKeyConstraints();

        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',250);
            $table->string('phone',250)->nullable();
            $table->unsignedInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments');


            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('employees');
    }
}
