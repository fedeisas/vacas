<?php

class VaccineTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('vaccine')->delete();

        $vaccine = array(
        	array('id' => 1, 'name' => 'Ivermectina', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 2, 'name' => 'Brucelosis', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 3, 'name' => 'Aftosa', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 4, 'name' => 'Clostridial', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 5, 'name' => 'Carbunclo', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 6, 'name' => 'Triple', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 7, 'name' => 'Quintuple', 'created_at' => new Datetime, 'updated_at' => null),
        );

        // Uncomment the below to run the seeder
        DB::table('vaccine')->insert($vaccine);
    }

}