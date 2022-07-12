<?php

use Illuminate\Database\Seeder;
use \App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 1000; $i++) {
            $train = new Train();
            $train->agency = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrival_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->code = $faker->numberBetween(1, 5000);
            $train->carriages = $faker->numberBetween(10, 30);
            $train->save();
        }
    }
}
