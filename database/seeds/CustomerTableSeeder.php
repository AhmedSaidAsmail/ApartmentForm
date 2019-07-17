<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer=new \App\Customer();
        $customer->name="employee";
        $customer->email="employee@employee.com";
        $customer->password=bcrypt('employee');
        $customer->save();
    }
}
