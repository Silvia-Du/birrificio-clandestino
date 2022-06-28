<?php

use Faker\Generator as Faker;
use App\Beer;

use Illuminate\Database\Seeder;

class BeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20 ; $i++) {
            $new_beer = new Beer();

            $new_beer->name = $faker->word();
            $new_beer->company = $faker->company();
            $new_beer->type = $faker->word();
            $new_beer->alcohol_content = $faker->numberBetween(0, 68);
            $new_beer->description = $faker->paragraph();
            $new_beer->image = $faker->imageUrl(null, 640, 480);
            $new_beer->hops = $faker->numberBetween(0, 10);
            $new_beer->gluteen_free = $faker->boolean();

            $new_beer->save();
        }
    }
}
