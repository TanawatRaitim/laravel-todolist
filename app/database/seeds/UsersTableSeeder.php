<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the users table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
		
		$users = array(
		
			array(
				'name'=>'Terry',
				'password'=> Hash::make('terry'),
				'email'=> 'terry@wswp.co.th'
			),
			array(
				'name'=> 'Tanawat',
				'password'=> Hash::make('1234'),
				'email'=> 'tanawat.ra@mail.wswp.co.th'
			)
		);
		
		DB::table('users')->insert($users);
		
	}

}
