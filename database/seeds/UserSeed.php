<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->insert([
			'id_group' => 1,
			'name' => 'richard',
			'email' => 'richard.kovacs.dev@gmail.com',
			'password' => bcrypt('123123'),
			'color' => 'rgba(250, 0, 0, 0.61)',
			]);
		DB::table('users')->insert([
			'id_group' => 2,
			'name' => 'user',
			'email' => 'user@gmail.com',
			'password' => bcrypt('123123'),
			'color' => 'rgba(102, 92, 214, 0.8)',
			]);
		
    }
}
