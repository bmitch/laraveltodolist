<?php

class UsersTableSeeder extends Seeder
{

	public function run()
	{
		User:: truncate();
		
		User::create([
			'username' 	=> 'bobsmith',
			'email'		=> 'bobsmith@aol.com',
			'password'	=>	'1234'

		]);

		User::create([
			'username' 	=> 'johndoe',
			'email'		=> 'adffdf@aol.com',
			'password'	=>	'1234'

		]);
	}
}