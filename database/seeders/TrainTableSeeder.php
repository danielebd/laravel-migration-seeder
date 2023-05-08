<?php

namespace Database\Seeders;

use App\Models\Trains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        for($i = 0; $i < 5; $i++){

        }
        $newTrain = new Trains();
        $newTrain->company = $faker->randomElement(['Trenitalia', 'Italo', 'Trenord']);
        $newTrain->departure_station = $faker->city();
        $newTrain->arrival_station = $faker->city();
        $newTrain->departure_time = $faker->dateTimeThisMonth('+2 days');
        $newTrain->arrival_time = $faker->dateTimeThisMonth();
        $newTrain->train_code = $faker->bothify('######');
        $newTrain->coaches = $faker->numberBetween(0, 15);
        $newTrain->on_time = $faker->numberBetween(0, 1);
        $newTrain->cancelled = $faker->numberBetween(0, 1);
        $newTrain->save();
    }
}
