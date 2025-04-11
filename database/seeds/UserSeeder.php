<?php

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
        DB::table('users')->insert([
        	[
                'first_name'  => 'Taiwo',
                'last_name'   => 'Olajide',
                'phone_number' => '08138139333',
                'email' => 'tolajide74@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'Administrator',
                'status' => 1,
                'online_status' => 0,
            ],

        ]);
    }
}
