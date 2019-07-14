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
        $customer->name="customer";
        $customer->email="customer@customer.com";
        $customer->password=bcrypt('customer');
        $customer->save();
    }
}
