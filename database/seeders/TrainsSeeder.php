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

        //FAKER-----------------------------------------------
        
        // for ($i = 0; $i < 50; $i++) {

        //     $train = new Train();

        //     $train->company = $faker->company();
        //     $train->departure_station = $faker->city();
        //     $train->arrival_station = $faker->city();
        //     $train->departure_time = $faker->dateTimeBetween('-1 week', '+2 week');
        //     $train->arrival_time = $faker->dateTimeBetween('-1 week', '+2 week');
        //     $train->train_code = $faker->randomNumber(5, true);
        //     $train->no_train_carriages = $faker->randomNumber(2, false);
        //     $train->is_on_schedule = $faker->boolean();
        //     $train->is_cancelled  = $faker->boolean();

        //     $train->save();
        // }


        //CSV FILE--------------------------------------------

        $trainFile = fopen(__DIR__ . '/../trains_data_excel.csv', 'r');

        $trainCSV = fgetcsv($trainFile);
        $trainCSV = fgetcsv($trainFile);

        while ($trainCSV != false) {

            $train = new Train();

            $train->company = $trainCSV[0];
            $train->departure_station = $trainCSV[1];
            $train->arrival_station = $trainCSV[2];
            $train->departure_time = $trainCSV[3];
            $train->arrival_time = $trainCSV[4];
            $train->train_code = $trainCSV[5];
            $train->no_train_carriages = $trainCSV[6];
            $train->is_on_schedule = $trainCSV[7];
            $train->is_cancelled = $trainCSV[8];

            $train->save();

            $trainCSV = fgetcsv($trainFile);
        }

    }
}
