<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            "owner_id" => 1,
            "type" => "redirection",
            "status" => fake()->randomElement(["online", "limit_reached", "disabled", "offline"]),
            "endpoint" => fake()->url(),
            "protected" => fake()->numberBetween(0,1),
            "password" => null, //todo
            "discord_users" => null,
            "rebox_users" => null
        ];
    }
}
