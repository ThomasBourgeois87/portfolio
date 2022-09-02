<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Project;
use App\Models\WhereMade;
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

        $project = Project::factory()->create([
            "where_made_id" => WhereMade::factory(),
            'category_id' => Category::factory(),
        ]);

        
    }
}
