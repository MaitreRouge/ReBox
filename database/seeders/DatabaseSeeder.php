<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Item;
use App\Models\Log;
use App\Models\Protection;
use App\Models\Redirection;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

        for ($i = 0; $i < 15; $i++) {
            $a = Item::factory(1)->create([
                "protected" => random_int(0, 1),
                "owner_id" => $u->toArray()[0]["id"],
                "status" => ["online", "offline"][random_int(0, 1)]
            ]);

            Redirection::factory(1)->create([
                "id" => $a->toArray()[0]["id"]
            ]);

            if ($a->toArray()[0]["protected"]) {
                Protection::factory(1)->create([
                    "item_id" => $a->toArray()[0]["id"],
                    "limit" => random_int(0, 200),
                    "password" => null
                ]);
            }

            Log::factory(random_int(0, 200))->create([
                "item_id" => $a->toArray()[0]["id"]
            ]);
        }
    }
}
