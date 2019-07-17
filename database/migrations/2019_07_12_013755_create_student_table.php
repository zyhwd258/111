<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->comment('姓名');
            $table->text('age')->comment('年龄');
            $table->text('sex')->comment('性别');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *php artisan migrate
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
