<?php

use Illuminate\Database\Seeder;

class IdentificationTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\IdentificationType::insert([
            [
               'name' => 'Voters card'
            ],
            [
                'name' => 'National identity card'
            ],
            [
                'name' => 'Driver License'
            ],
            [
                'name' => 'International Passport'
            ],
        ]);
    }
}
