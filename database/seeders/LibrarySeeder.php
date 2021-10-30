<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('library_models')->truncate();

        \Illuminate\Support\Facades\DB::table('library_models')->insert([
            [
                'bookid' => 1,
                'authorid' =>1,
                'title' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'ISBN' => 'in voluptate',
                'pub_year' => 2012,
                'available' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'bookid' => 2,
                'authorid' =>2,
                'title' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'ISBN' => 'in voluptate',
                'pub_year' => 2012,
                'available' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'bookid' => 3,
                'authorid' =>3,
                'title' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'ISBN' => 'in voluptate',
                'pub_year' => 2012,
                'available' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'bookid' => 4,
                'authorid' =>4,
                'title' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'ISBN' => 'in voluptate',
                'pub_year' => 2012,
                'available' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'bookid' => 5,
                'authorid' =>5,
                'title' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'ISBN' => 'in voluptate',
                'pub_year' => 2012,
                'available' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]


        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
