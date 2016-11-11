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
    	$now = date('Y-m-d H:i:s');

        DB::table('users')->insert([
        	'username' => 'miika',
        	'email' => 'miikasikala96@gmail.com',
        	'password' => bcrypt('salasana'),
        	'created_at' => $now,
        	'updated_at' => $now
        ]);
    }
}
