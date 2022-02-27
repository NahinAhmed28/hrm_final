<?php

namespace Database\Seeders;

use Faker\Provider\DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class ExpenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('expenses')->truncate(); // deleting old records.
        $faker = Faker\Factory::create();


        for ($i=0; $i < 20; $i++) {
        \App\Models\Expense::create([
            'itemName'    => '123456',
            'purchaseDate'      =>  $faker->dateTime(),
            'purchaseFrom'         =>  $faker->firstName,
            'price'      =>  $faker->randomDigit,
            'bill'        =>  $faker->randomDigit,
            'status'        => '1',
            ]);
        }
    }
}
