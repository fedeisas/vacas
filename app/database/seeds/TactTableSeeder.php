<?php

class TactTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('tact')->delete();

        $tact = array(
			array('id' => 1, 'name' => 'llena', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 2, 'name' => 'vacia', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 3, 'name' => 'no', 'created_at' => new Datetime, 'updated_at' => null),
        );

        // Uncomment the below to run the seeder
        DB::table('tact')->insert($tact);
    }

}