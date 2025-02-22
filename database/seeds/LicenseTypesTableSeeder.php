<?php

use Illuminate\Database\Seeder;

class LicenseTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\LicenseType::insert([
            [
               'name' => 'Basic License',
               'amount' => '5000000'
            ],
            [
                'name' => 'Professional License',
                'amount' => '7500000'
            ],
            [
                'name' => 'Basic License',
                'amount' => '15000000'
            ],
        ]);
    }
}
