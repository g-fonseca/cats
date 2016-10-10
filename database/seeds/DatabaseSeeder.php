<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // seed those uses
        $this->call(UserSeed::class);

        // seed those cats
        $this->call(CatSeed::class);

    }
}
