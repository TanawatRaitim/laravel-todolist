<?php

class ItemsTableSeeder extends Seeder {

	/**
	 * Run the Items table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('items')->delete();
		
		$items = array(
		
			array(
				'owner_id'=> 1,
				'name' => 'Pick up milk',
				'done' => false
			),
			array(
				'owner_id'=> 1,
				'name' => 'Travel Japan',
				'done' => false
			),
			array(
				'owner_id'=> 2,
				'name' => 'Hello Todo list app',
				'done' => false
			)
		);
		
		DB::table('items')->insert($items);
		
	}

}
