<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
		$this->call('TactTableSeeder');
		$this->call('CalvingTableSeeder');
		$this->call('VaccineTableSeeder');
		$this->call('StatusTableSeeder');
	}

}