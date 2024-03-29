<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Type;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {

            $type = new Type();
            $type->nome = $faker->word(3);
            $type->slug = str::slug($type->nome, '-');
            $type->descrizione = $faker->text(500);
            $type->save();
        }
    }
}
