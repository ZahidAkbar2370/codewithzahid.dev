<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Language::factory(10)->create();

        Language::create([
            "user_id" => "1",
            "language_name" => "html",
        ]);

        Language::create([
            "user_id" => "1",
            "language_name" => "css",
        ]);

        Language::create([
            "user_id" => "1",
            "language_name" => "laravel",
        ]);

        Language::create([
            "user_id" => "1",
            "language_name" => "csharp",
        ]);

        Language::create([
            "user_id" => "1",
            "language_name" => "reactjs",
        ]);

        Language::create([
            "user_id" => "1",
            "language_name" => "vuejs",
        ]);

        Language::create([
            "user_id" => "1",
            "language_name" => "wordpress",
        ]);

        Language::create([
            "user_id" => "1",
            "language_name" => "cplusplus",
        ]);
    }
}
