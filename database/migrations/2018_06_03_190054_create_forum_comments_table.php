<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCommentsTable
 */
class CreateForumCommentsTable extends Migration
{

    /** @return void */
    public function up()
    {
        Schema::create('forum_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('forum_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('firstname');
            $table->string('email');
            $table->string('gender');
            $table->text('text');
            $table->integer('parent_id')->unsigned()->nullable(); //разрешаем null;
            $table->boolean('status')->default(config('comments.show_immediately'));
            $table->timestamps();
        });
        Schema::table('forum_comments', function ( $table) {
            $table->foreign('forum_id')->references('id')->on('forum');

            if(config('comments.user')){
                $table->foreign('user_id')->references('id')->on('users');
            }
        });

    }

    /** @return void */
    public function down()
    {
        Schema::dropIfExists('forum_comments');
    }

}
