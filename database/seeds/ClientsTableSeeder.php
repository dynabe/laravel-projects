<?php

use Illuminate\Database\Seeder;
use App\Clients;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 30; $i++) {

            $page = new Clients();
            $page->name = $faker->company;
            $page->email = $faker->email;
            $page->save();

          }

    }
}
