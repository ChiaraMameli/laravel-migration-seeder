<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $new_train = new Train();
            $new_train->firm = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->date();
            $new_train->arrival_time = $faker->date();
            $new_train->train_code = $faker->randomNumber(8, true);
            $new_train->carriage_number = $faker->randomDigitNotNull();
            $new_train->on_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();
            $new_train->save();

        }
    }
}
