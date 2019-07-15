<?php

use Illuminate\Database\Seeder;

class WeeksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=1 ; $i<53 ; $i++){
    		DB::table('weeks')->insert(['week_number'   => '2019-W'.$i,
    									'created_at' => '2019-01-01 00:00:00',
                    					'updated_at' => '2019-01-01 00:00:00']);
    	}
        
    }
}
