<?php

use Illuminate\Database\Seeder;
use App\Comment;

/**
 * Class TestCommentsSeeder
 *
 * Автозаполнение данными таблицы comments для тестирования работы расширения
 */
class TestCommentsSeeder extends Seeder
{

    /**
     * @return void
     */
    public function run()
    {

        $key_field = config('comments.key_field');

        $key_id = config('comments.key_id');


        Comment::create(
            [
                'id'=>'1',
                'firstname'=>'Сергей',
                'secondname'=>'Петров',
                'email'=>'ksl1980@mail.ru',
                'text'=>'Текст WEB-программиста Сергея',
                'created_at'=>'2017-07-02 14:36:33',
                $key_field => $key_id
            ]);


        Comment::create(
            [
                'firstname'=>'Анна',
                'secondname'=>'Иванова',
                'email'=>'dasha@mail.ru',
                'text'=>'Текст Даши',
                'created_at'=>'2017-07-08 19:58:15',
                $key_field => $key_id
            ]);


        Comment::create(
            [
                'firstname'=>'Василий',
                'secondname'=>'Горький',
                'email'=>'vasia@mail.ru',
                'text'=>'Привет, епта!',
                'parent_id'=>'1',
                'created_at'=>'2017-07-14 11:26:14',
                $key_field => $key_id
            ]);
    }
}