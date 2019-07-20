<?php

use Illuminate\Database\Seeder;

class MoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('moods')->insert([
                        ['label'   => 'heureux', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                   		['label'   => 'energique', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                    	['label'   => 'enerve', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                    	['label'   => 'fatigue', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                    	['label'   => 'malade', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                    	['label'   => 'triste', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                    	['label'   => 'inquiet', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                    	['label'   => 'amoureux', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                    	['label'   => 'calme', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00'],
                    	['label'   => 'colere', 'created_at' => '2019-01-01 00:00:00',
                    'updated_at' => '2019-01-01 00:00:00']   
                ]);
    }
}
