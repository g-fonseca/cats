<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

Use App\Cat;


class CatSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // clear out any old data if it exists
        DB::table('cats')->delete();

        $data = [
            [
                'id' => 1,
                'name' => 'Baba Do',
                'photo' => null,
                'description' => '',
                'color' => 'black',
                'active' => 1,
                'weight' => '',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 2,
                'name' => 'Sam',
                'photo' => null,
                'description' => null,
                'color' => null,
                'active' => 1,
                'weight' => null,
                'created_at' => '2016-09-29 19:27:24',
                'updated_at' => '2016-09-29 19:27:24',
            ],
            [
                'id' => 3,
                'name' => 'Tony',
                'photo' => null,
                'description' => null,
                'color' => null,
                'active' => 1,
                'weight' => null,
                'created_at' => '2016-09-29 19:27:24',
                'updated_at' => '2016-09-29 19:27:24',
            ]

        ];

        foreach ($data as $item) {
            
            $cat = new Cat();

            foreach ($item as $key => $value) {
                $cat->{$key} = $value;
            }

            $cat->save();
        }
    }
}
