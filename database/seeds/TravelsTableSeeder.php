<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 5; $i++) {
        $new_travel = new Travel();
        $new_travel->title = $faker->sentence(3);
        $new_travel->travel_tips = $faker->word();
        $new_travel->destination = $faker->city();
        $new_travel->description = $faker->paragraph(2);
        $new_travel->days = $faker->randomDigitNot(2);
        $new_travel->persons = $faker->randomDigit();
        $new_travel->date_in = $faker->dateTime();
        $new_travel->date_out = $faker->dateTime();
        $new_travel->price = $faker->randomFloat();
        $new_travel->save();
      }
    }
}
