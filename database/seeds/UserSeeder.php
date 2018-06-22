<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'firstname'=>'admin',
                'secondname'=>'admin',
                'email'=>'admin@admin.ru',
                'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
                'gender' => 'male',
                'role' => 'Администратор',
                'verified' => 1,
            ]);
    }
}
