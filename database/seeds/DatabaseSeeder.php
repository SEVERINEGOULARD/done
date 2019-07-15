<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CitiesTableSeeder::class);
        $this->call(TemplatesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(WeeksTableSeeder::class);
        $this->call(ZonesTableSeeder::class);
        $this->call(MoodsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
