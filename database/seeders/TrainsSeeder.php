<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 50; $i++) {

            $train = new Train();

            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('-1 week', '+2 week');
            $train->arrival_time = $faker->dateTimeBetween('-1 week', '+2 week');
            $train->train_code = $faker->randomNumber(5, true);
            $train->no_train_carriages = $faker->randomNumber(2, false);
            $train->is_on_schedule = $faker->boolean();
            $train->is_cancelled  = $faker->boolean();

            $train->save();
        }

    }
}
