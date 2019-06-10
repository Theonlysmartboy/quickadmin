<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$iqkfDUhtRtXax.sndDfhZezIETVi3w06hIDeUs55TkFhmIOo4AkKi',
            'remember_token' => null,
            'created_at'     => '2019-06-10 06:03:49',
            'updated_at'     => '2019-06-10 06:03:49',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
