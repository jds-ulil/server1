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

		User::create(array(
			'name'     => 'Ulil',
			'username' => 'Ulil',
			'email'    => 'ulil@gmail.com',
			'password' => Hash::make('ulil'),
		));

		User::create(array(
			'name'     => 'Roly',
			'username' => 'Roly',
			'email'    => 'roly@gmail.com',
			'password' => Hash::make('admin'),
		));

		User::create(array(
			'name'     => 'Umar',
			'username' => 'Umar',
			'email'    => 'umar@gmail.com',
			'password' => Hash::make('admin'),
		));

		User::create(array(
			'name'     => 'Indro',
			'username' => 'Indro',
			'email'    => 'indro@gmail.com',
			'password' => Hash::make('admin'),
		));

		User::create(array(
			'name'     => 'Mark',
			'username' => 'Mark',
			'email'    => 'mark@gmail.com',
			'password' => Hash::make('admin'),
		));

		User::create(array(
			'name'     => 'Khalid',
			'username' => 'Khalid',
			'email'    => 'khalid@gmail.com',
			'password' => Hash::make('admin'),
		));

		User::create(array(
			'name'     => 'Udin',
			'username' => 'Udin',
			'email'    => 'udin@gmail.com',
			'password' => Hash::make('admin'),
		));

		User::create(array(
			'name'     => 'Susi',
			'username' => 'Susi',
			'email'    => 'susi@gmail.com',
			'password' => Hash::make('admin'),
		));


		User::create(array(
			'name'     => 'Peter',
			'username' => 'Peter',
			'email'    => 'peter@gmail.com',
			'password' => Hash::make('admin'),
		));

		User::create(array(
			'name'     => 'Mito',
			'username' => 'mito',
			'email'    => 'mito@gmail.com',
			'password' => Hash::make('ulil'),
		));
	}

}       