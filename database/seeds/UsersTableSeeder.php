<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
        $user = new User();
        $user->name = 'Nnamdi';
        $user->email = 'nnamdi.i@rytegate.com';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret123');
        $user->save();         
    }
}
