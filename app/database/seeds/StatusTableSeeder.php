<?php

class StatusTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('status')->delete();

        $status = array(
			array('id' => 1, 'name' => 'Viva', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 2, 'name' => 'Muerta', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 3, 'name' => 'Vendida', 'created_at' => new Datetime, 'updated_at' => null),
			array('id' => 4, 'name' => 'Perdida', 'created_at' => new Datetime, 'updated_at' => null),
        );

        // Uncomment the below to run the seeder
        DB::table('status')->insert($status);
    }

}