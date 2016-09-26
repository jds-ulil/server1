<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Coe Ing',
			'username' => 'admin',
			'email'    => 'admin@gmail.com',
			'password' => Hash::make('admin'),
		));
	}

}       