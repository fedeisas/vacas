<?php

class CalvingTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('calving')->delete();

        $calving = array(
			array('id' => 1, 'name' => 'Macho', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 2, 'name' => 'Hembra', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 3, 'name' => 'No', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 4, 'name' => 'Mal Pario', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 5, 'name' => '?', 'created_at' => new Datetime, 'updated_at' => null),
        );

        // Uncomment the below to run the seeder
        DB::table('calving')->insert($calving);
    }

}