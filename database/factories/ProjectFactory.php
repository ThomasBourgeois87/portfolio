<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\WhereMade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(6, true),
            'description' => $this->faker->paragraph(3, true),
            'visible' => $this->faker->boolean,
            'position' => $this->faker->unique()->numberBetween(1, 12),
            'project_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'cover_image' => $this->faker->imageUrl(),
            // 'categories_id' => Category::factory(),
            // 'where_mades_id' => WhereMade::factory(),
            'slug' => $this->faker->slug,
        ];
    }
}
