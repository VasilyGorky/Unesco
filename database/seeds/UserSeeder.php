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
                'firstname'=>'admin_unesco',
                'secondname'=>'admin',
                'email'=>'admin_unesco@admin.ru',
                'password' => \Illuminate\Support\Facades\Hash::make('DWCXWRbx'),
                'gender' => 'male',
                'role' => 'Администратор',
                'verified' => 1,
            ]);
    }
}
