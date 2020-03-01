<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            'fname' => 'julven',
            'lname' => 'condor',
            'gender' => 'male',
            'bday' => '07-07-1990',
            'username' => 'admin',
            'password' => bcrypt('admin'),

        ]);
    }
}
