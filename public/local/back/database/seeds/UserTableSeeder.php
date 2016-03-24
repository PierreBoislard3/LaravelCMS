<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'Pierre',
                'email' => 'pboislard3@gmail.com',
                'password' => bcrypt('vagrant')
            ]
        ]);
    }
}
