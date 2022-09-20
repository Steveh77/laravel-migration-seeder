<?php

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 5; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->randomNumber(5, true);
            $new_train->number_of_carriages = $faker->numberBetween(0, 20);;
            $new_train->in_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();

            $new_train->save();
        }
    }
}
