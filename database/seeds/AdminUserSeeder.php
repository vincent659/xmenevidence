<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'wolverine',
            'email' => 'wolverine@marvel.com',
            'meat' => 'chicken',
            'description' => 'wolverine powers',
            'password' => bcrypt('xmenisthebest'),
        ]);
    }
}
