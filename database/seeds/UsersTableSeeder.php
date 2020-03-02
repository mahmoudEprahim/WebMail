<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert ([
        'email'=> 'ammar@gmail.com',
        'name'=> 'ammar',
        'role'=> 'admin',
        'password'=> bcrypt('12345678'),

    ]);
        
    }
}
