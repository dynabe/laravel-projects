<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Roles;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Roles::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'user1';
        $user->email = 'user1@example.com';
        $user->password = bcrypt('123');
        $user->save();
        $user->roles()->attach($role);

        $user = new User();
        $user->name = 'user2';
        $user->email = 'user2@example.com';
        $user->password = bcrypt('123');
        $user->save();
        $user->roles()->attach(2);

        $user = new User();
        $user->name = 'user3';
        $user->email = 'user3@example.com';
        $user->password = bcrypt('123');
        $user->save();
        $user->roles()->attach(3);
    }
}
