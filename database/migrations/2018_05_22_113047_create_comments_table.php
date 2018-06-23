<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCommentsTable
 */
class CreateCommentsTable extends Migration
{

    /** @return void */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('firstname');
            $table->string('email');
            $table->string('gender');
            $table->text('text');
            $table->integer('parent_id')->unsigned()->nullable(); //разрешаем null;
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
        Schema::table('comments', function ( $table) {
            $table->foreign('item_id')->references('id')->on('items');

            if(config('comments.user')){
                $table->foreign('user_id')->references('id')->on('users');
            }
        });

    }

    /** @return void */
    public function down()
    {
        Schema::dropIfExists('comments');
    }

}
