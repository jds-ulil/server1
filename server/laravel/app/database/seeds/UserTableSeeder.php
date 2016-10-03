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
			'password' => 'admin',
		));

		User::create(array(
			'name'     => 'Ulil',
			'username' => 'ulil',
			'email'    => 'ulil@gmail.com',
			'password' => 'ulil',
		));

		User::create(array(
			'name'     => 'Roly',
			'username' => 'Roly',
			'email'    => 'roly@gmail.com',
			'password' => 'admin',
		));

		User::create(array(
			'name'     => 'Umar',
			'username' => 'Umar',
			'email'    => 'umar@gmail.com',
			'password' => 'admin',
		));

		User::create(array(
			'name'     => 'Indro',
			'username' => 'Indro',
			'email'    => 'indro@gmail.com',
			'password' => 'admin',
		));

		User::create(array(
			'name'     => 'Mark',
			'username' => 'Mark',
			'email'    => 'mark@gmail.com',
			'password' => 'admin',
		));

		User::create(array(
			'name'     => 'Khalid',
			'username' => 'Khalid',
			'email'    => 'khalid@gmail.com',
			'password' => 'admin',
		));

		User::create(array(
			'name'     => 'Udin',
			'username' => 'Udin',
			'email'    => 'udin@gmail.com',
			'password' => 'admin',
		));

		User::create(array(
			'name'     => 'Susi',
			'username' => 'Susi',
			'email'    => 'susi@gmail.com',
			'password' => 'admin',
		));


		User::create(array(
			'name'     => 'Peter',
			'username' => 'Peter',
			'email'    => 'peter@gmail.com',
			'password' => 'admin',
		));

		User::create(array(
			'name'     => 'Mito',
			'username' => 'mito',
			'email'    => 'mito@gmail.com',
			'password' => 'admin',
		));

		User::create(array(
			'name'     => 'Sophia',
			'username' => 'sofie',
			'email'    => 'ariel@gmail.com',
			'password' => 'adk',
		));

		User::create(array(
			'name'     => 'Saad',
			'username' => 'saad',
			'email'    => 'saad@gmail.com',
			'password' => 'saad',
		));

		User::create(array(
			'name'     => 'mae',
			'username' => 'mai',
			'email'    => 'mai@gmail.com',
			'password' => 'mai',
		));

		User::create(array(
			'name'     => 'Jesica',
			'username' => 'jse',
			'email'    => 'jj@gmail.com',
			'password' => 'ss',
		));

		User::create(array(
			'name'     => 'Mirna',
			'username' => 'salihin',
			'email'    => 'salihin@gmail.com',
			'password' => 'saad',
		));

	}

}       