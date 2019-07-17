<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        php artisan make:migration create_comments_table
//        php artisan migrate
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content')->comment('回复内容');
            $table->integer('articleId')->comment('文章ID');
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
        Schema::dropIfExists('comments');
    }
}
