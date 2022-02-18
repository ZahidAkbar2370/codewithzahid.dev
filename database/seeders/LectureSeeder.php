<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Lecture::factory(10)->create();
    }
}
