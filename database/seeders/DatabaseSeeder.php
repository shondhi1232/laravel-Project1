<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $Faker=Faker::create();
        foreach(range(1,100)as $index);
        {
            DB::table('Clients')->insert([
                'name'=> $Faker->name(),
                'email'=>$Faker->email(),
            ]);
        }
    }
}
