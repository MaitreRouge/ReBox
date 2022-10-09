<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Item;
use App\Models\Redirection;
use App\Models\User;
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
        $u = User::factory(1)->create([
            "name" => "test",
            "email" => "test@test.fr",
            "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"
        ]);

        for ($i = 0; $i < 10; $i++) {
            $a = Item::factory(1)->create([
                "owner_id" => $u->toArray()[0]["id"]
            ]);
            Redirection::factory(1)->create([
                "id" => $a->toArray()[0]["id"]
            ]);
        }
    }
}
