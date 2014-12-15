<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'id' => 1,
            'email' => 'demo@demo.local',
            'password' => Hash::make('demo!'),
        ));
    }
}
