<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEssayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('essay', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('title')->comment('书籍');
            $table->integer('type')->comment('类型');
            $table->integer('author')->comment('作家');
            $table->integer('summary')->comment('密码');
            $table->text('content')->comment('回复内容');
            $table->text('date')->comment('日期');
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
        Schema::dropIfExists('essay');
    }
}
