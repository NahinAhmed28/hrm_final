<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;
use Illuminate\Support\Str;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('employees')->truncate(); // deleting old records.
        DB::table('awards')->truncate(); // deleting old records.
        $faker = Faker\Factory::create();

        \App\Models\Employee::create([
            'employeeID'    => '123456',
            'fullName'      => $faker->firstName.' '.$faker->lastName,
            'email'         => 'employee@example.com',
            'password'      => '123456',
            'gender'        => $faker->randomElement(['male','female']),
            'fatherName'    => $faker->name,
            'mobileNumber'  => rand(1, 9),
            'designation'   => rand(1, 4),
            'joiningDate'   => $faker->dateTimeBetween('-2 years')->format('Y-m-d'),
            'localAddress'  => $faker->address, 'permanentAddress' => $faker->address,
            'status'        => '1',
            'date_of_birth'        => '27-Dec-2017',
            'last_login' => $faker->dateTime,
        ]);

        for ($i=0; $i < 20; $i++) {
            $employeeID[ $i ] = $faker->randomNumber(9);
            \App\Models\Employee::create([
                'employeeID'    => $employeeID[ $i ],
                'fullName'      => $faker->firstName.' '.$faker->lastName,
                'email'         => $faker->email,
                'password'      => '123456',
                'gender'        => $faker->randomElement(['male','female']),
                'fatherName'    => $faker->name,
                'mobileNumber'  => rand(111111111, 9999999999),
                'designation'   => rand(1, 4),
                'joiningDate'   => $faker->dateTimeBetween('-2 years')->format('Y-m-d'),
                'localAddress'  => $faker->address, 'permanentAddress' => $faker->address,
                'status'        => '1',
                'date_of_birth' => '27-Dec-2017',
                'last_login' => $faker->dateTime,
            ]);
        }

        for ($i=0; $i < 10; $i++) {
            \App\Models\Award::create([
                'employeeID' => $employeeID[rand(0,19)],
                'awardName'  => 'Employee of the Month',
                'gift'       => 'pen',
                'cashPrice'  => rand(100,4000),
                'forMonth'   => strtolower($faker->monthName),
                'foryear'    => '2014'

            ]);
        }

        for ($i=0; $i < 30; $i++){

            \App\Models\Salary::create([
                'employeeID' =>   $employeeID[rand(0,19)],
                'type'  => Str::random(5),
                'salary'       => $faker->numberBetween($min = 10000, $max = 90000) ,
                'remarks'  => rand(100,4000),
            ]);

        }

    }
}
