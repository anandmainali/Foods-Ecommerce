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
        DB::table('users')->insert([
            'uname' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'utype'=>'admin',
            'status'=>1,
        ]);
     //
    }
}
