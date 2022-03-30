<?php
namespace Database\Seeders;

use App\Models\Award;
use App\Models\Leavetype;
use App\Models\Noticeboard;
use App\Models\Setting;
use App\Models\Admin;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Expense;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \Eloquent::unguard();

        $this->call(SettingTableSeeder::class);
        $this->command->info('Setting table seeded!');

        $this->call(AdminTableSeeder::class);
        $this->command->info('ADMIN table seeded!');

//        if(env('APP_ENV') == 'development' || env('APP_ENV') == 'demo'){
            $this->call(DepartmentTableSeeder::class);
            $this->command->info('Department table seeded!');
            $this->command->info('Designation also table seeded!');

            $this->call(EmployeesTableSeeder::class);
            $this->command->info('Employees table seeded!');

            $this->call(NoticeBoardSeeder::class);
            $this->command->info('Notice Board seeded');
//        }

        $this->call(LeaveTypeSeeder::class);
        $this->command->info('LeaveType table seeded!');


        $this->call(ExpenseTableSeeder::class);
        $this->command->info('ExpenseTableSeeder table seeded!');

//        $this->call(SalarySeeder::class);
//        $this->command->info('SalarySeeder table seeded!');


        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }

}
