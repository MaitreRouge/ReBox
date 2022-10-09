<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "id" => Str::random(8),
            "name" => fake()->word(),
            "domain" => "127.0.0.1",
            "source" => "/" . fake()->word(),
            "owner_id" => Str::random(6),
            "type" => "redirection",
            "status" => "online",
            "protected" => 0
        ];
    }
}
